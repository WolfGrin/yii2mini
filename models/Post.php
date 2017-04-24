<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.04.2017
 * Time: 15:25
 */

namespace app\models;
use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }
}