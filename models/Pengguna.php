<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengguna".
 *
 * @property string $username
 * @property string $password
 * @property string $nama
 * @property string $tgl_daftar
 * @property int $admin
 * @property int $theme
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $password_repeat;

    public static function tableName()
    {
        return 'pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'nama'], 'required'],
            [['admin', 'theme'], 'integer'],
            [['tgl_daftar', 'active'], 'safe'],
            [['username'], 'string', 'max' => 20],
            [['password', 'nama'], 'string', 'max' => 255],
            [['username'], 'unique'],
            ['password_repeat', 'required', 'skipOnEmpty' => !$this->isNewRecord],
            ['password_repeat', 'compare', 'compareAttribute' => 'password', 'message' => "Password tidak sesuai"],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'password' => 'Password',
            'nama' => 'Nama',
            'tgl_daftar' => 'Tgl Daftar',
            'admin' => 'Admin',
            'theme' => 'Theme',
        ];
    }

    public function getSatkere()
    {
        return $this->hasOne(Satker::className(), ['id_satker' => 'satker']);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->password = md5($this->password);
                return true;
            } else
                return true;
        } else {
            return false;
        }
    }
}
