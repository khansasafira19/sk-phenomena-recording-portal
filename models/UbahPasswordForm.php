<?php
namespace app\models;
use Yii;
use yii\base\Model;
/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class UbahPasswordForm extends Model
{
    public $password_lama, $password_baru, $password_ulang;
    private $_user;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['password_lama', 'password_baru', 'password_ulang'], 'required'],
            ['password_lama', 'compareCurrentPassword'],
            ['password_baru', 'string', 'min' => 6, 'max' => 15],
            ['password_ulang', 'compare', 'compareAttribute' => 'password_baru', 'message' => 'Ulangi password baru tidak sesuai.'],
        ];
    }
    public function attributeLabels()
    {
        return array(
            'password_lama' => 'Password Saat Ini',
            'password_baru' => 'Password Baru',
            'password_ulang' => 'Ulangi Password Baru',
        );
    }
    public function compareCurrentPassword($attribute, $params)
    {
        if (md5($this->password_lama) !== $this->_user->password) {
            $this->addError($attribute, 'Password lama tidak sesuai.');
        }
    }
    public function init()
    {
        $this->_user = Pengguna::findOne(Yii::$app->user->identity->username);
    }
}
