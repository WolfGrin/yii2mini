<?php
/**
 * Created by PhpStorm.
 * User: WolfGrin
 * Date: 23.04.2017
 * Time: 18:31
 */

namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller
{
    public function debug ($arr) {
           echo "<pre>". print_r($arr, true) ."</pre>";
    }
}