<?php
namespace app\models;
use yii\db\ActiveRecord;
use Yii;
class User extends ActiveRecord implements \yii\web\IdentityInterface
{
    public static function tableName()
    {
        return 'pengguna';
    }
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        // return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
        return static::findOne($id);
    }
    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        /* foreach (self::$users as $user) {
          if ($user['accessToken'] === $token) {
          return new static($user);
          }
          }
          return null;
         */
        return static::findOne(['access_token' => $token]);
    }
    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        /* foreach (self::$users as $user) {
          if (strcasecmp($user['username'], $username) === 0) {
          return new static($user);
          }
          }
          return null;
         */
        return static::findOne(['username' => $username]);
        //return static::findOne(['username' => $username,'id_bidsie'=>5]);
    }
    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->username;
    }
    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        //return $this->authKey;
    }
    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        //return $this->authKey === $authKey;
    }
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === md5($password);
    }
}
