<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Fenomena;
use app\models\Pengguna;
use Abraham\TwitterOAuth\TwitterOAuth;
use app\models\GoogleSearchForm;
use Exception;
use GuzzleHttp\Client;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['index', 'contact', 'about', 'logout', 'theme'], // add all actions to take guest to login page
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['newscrawl', 'googlecse'], // action for user with status active (!=2),
                        //twitterfeeds is not here because my code no longer works. I left it here for knowledge sharing purposes.
                        'allow' => true,
                        // 'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return !\Yii::$app->user->isGuest && (\Yii::$app->user->identity->active !== 2);
                        },
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $jumlah = Fenomena::find()->select('*')->where('deleted = 0')->count();
        $jumlahtahunini = Fenomena::find()->select('*')->where('deleted = 0')->andWhere('tahun = ' . date("Y"))->count();
        $wilayahterbanyak = Fenomena::find()->select('count(*) as jumlahwilayah, satker.nama_satker')->joinWith('satker')->where('deleted = 0')->andWhere('tahun = ' . date("Y"))->groupBy('wilayah')->orderBy('count(*) DESC')->all();
        $topcontributor = Fenomena::find()->select('count(*) as jumlahwilayah, pengguna.nama, pengguna.satker as wilayah')->joinWith('reporter')->where('deleted = 0')->andWhere('pengguna.active = 1')->groupBy('perekam')->orderBy('count(*) DESC')->all();
        return $this->render('index', [
            'jumlah' => $jumlah,
            'jumlahtahunini' => $jumlahtahunini,
            'wilayahterbanyak' => $wilayahterbanyak[0]['nama_satker'],
            'wilayahterbanyakjumlah' => $wilayahterbanyak[0]['jumlahwilayah'],
            'topcontributor' => $topcontributor,
        ]);
    }
    /**
     * Login action.
     *
     * @return Response|string
     */

     public function actionLogin()
     {
         if (!Yii::$app->user->isGuest) {
             return $this->goHome();
         }
 
         $this->layout = 'main-login';
 
         $model = new LoginForm();
         if ($model->load(Yii::$app->request->post()) && $model->login()) {
             return $this->goBack();
         }
 
         $model->password = '';
         return $this->render('login', [
             'model' => $model,
         ]);
     }
    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionTheme($choice)
    {
        if ($choice == 0)
            $affected_rows = Pengguna::updateAll(['theme' => 0], 'username = "' . Yii::$app->user->identity->username . '"');
        else
            $affected_rows = Pengguna::updateAll(['theme' => 1], 'username = "' . Yii::$app->user->identity->username . '"');

        $previousUrl = Yii::$app->request->referrer;
        if (!$previousUrl) {
            $previousUrl = ['index'];
        }

        return $this->redirect($previousUrl);
    }

    public function actionTwitterfeeds()
    // As of November 2023, this code doesn't work anymore. Twitter only allows API V2, and to my knowledge, this app is V1 and non-upgradable to V2.
    {
        $connection = new TwitterOAuth(
            'SAUhjRrqfCopvTXk93ColbYzB',
            'PoJ7lBnYzOHIuqra1eLt1D713W0GeX9hsrkAy5l1y6xXhbHya2',
            '263104984-2QO840Z6KY5hOAk7rY2gnbqqRqiwEwm7YWXgGnR5',
            '2hOQMYs0hLffAeGU4XvRbJElqeTJUPsDuHXHDbbLdqZHR'
        );

        $tweets = $connection->get('search/tweets', [
            'q' => 'indonesia OR #indonesia OR #jakarta OR #bali',
            'count' => 100,
            'tweet_mode' => 'extended'
        ]);

        $usernames = ['jktinfo_id', 'kompascom', 'detikcom', 'mediaindonesia'];

        $tweets2 = [];
        foreach ($usernames as $username) {
            $tweets_array = $connection->get('statuses/user_timeline', [
                'screen_name' => $username,
                'count' => 10,
                'tweet_mode' => 'extended'
            ]);
            $tweets2 = array_merge($tweets2, $tweets_array);
        }

        return $this->render('twitterfeeds', [
            'tweets' => $tweets,
            'connection' => $connection,
            'tweets2' => $tweets2
        ]);
    }

    
    public function actionNewscrawl()
    {
        $client = new Client();
        $api_key = '5fff4f4501e14354bc1ec97a55bbcb53';
        $url = 'https://newsapi.org/v2/top-headlines?country=id&apiKey=' . $api_key;

        try {
            $response = $client->request('GET', $url, [
                'verify' => false, // disable SSL verification
            ]);
            $news = json_decode($response->getBody(), true);
        } catch (Exception $e) {
            $news_error_message = 'The News API service is not available at the moment. Please try again later.';
            $news = [];
        }

        // API key for the Google Custom Search API
        $apiKey = 'AIzaSyC0gem0KSxi464qzUH0HTv3PH-Je4NHReU';

        try {
            // GOOGLE CSE
            $client = new Client(['verify' => false]);

            $searchWords = [
                'indonesia',
                'ekonomi',
            ];

            $response = $client->request('GET', 'https://www.googleapis.com/customsearch/v1', [
                'query' => [
                    'key' => $apiKey,
                    'cx' => '377ab425de0e3423e',
                    'q' => implode(' OR ', $searchWords),
                ]
            ]);

            $results = json_decode($response->getBody());
        } catch (Exception $e) {
            $google_error_message = 'The Google API service is not available at the moment. Please try again later.';
            $results = [];
        }

        return $this->render('newscrawl', [
            'news' => $news['articles'] ?? [],
            'news_error_message' => $news_error_message ?? '',
            'results' => $results,
            'google_error_message' => $google_error_message ?? '',
        ]);
    }

    public function actionGooglecse()
    {
        $searchModel = new GoogleSearchForm();

        if ($searchModel->load(Yii::$app->request->get()) && $searchModel->validate()) {
            // Perform search using Google CSE API
            // API key for the Google Custom Search API
            $apiKey = 'AIzaSyC0gem0KSxi464qzUH0HTv3PH-Je4NHReU';

            try {
                // GOOGLE CSE
                $client = new Client(['verify' => false]);

                $searchWords = [];
                array_push($searchWords, $searchModel->searchWords);

                $response = $client->request('GET', 'https://www.googleapis.com/customsearch/v1', [
                    'query' => [
                        'key' => $apiKey,
                        'cx' => '377ab425de0e3423e',
                        'q' => implode(' OR ', $searchWords),
                    ]
                ]);

                $results = json_decode($response->getBody());
            } catch (Exception $e) {
                $google_error_message = 'The Google API service is not available at the moment. Please try again later.';
                $results = [];
            }

            return $this->render('googlecse_results', [
                'searchModel' => $searchModel,
                'results' => $results,
                'google_error_message' => $google_error_message ?? '',
            ]);
        }

        return $this->render('googlecse', [
            'searchModel' => $searchModel,
        ]);
    }
}
