<?php

namespace app\models;

use yii\base\Model;

class GoogleSearchForm extends Model
{
    public $searchWords;

    public function rules()
    {
        return [
            [['searchWords'], 'required'],
            [['searchWords'], 'string', 'max' => 255],
        ];
    }
}
