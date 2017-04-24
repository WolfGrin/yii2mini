<?php
/**
 * Created by PhpStorm.
 * User: WolfGrin
 * Date: 23.04.2017
 * Time: 18:33
 */

namespace app\controllers;


class PostController extends AppController
{
    public function actionIndex($name = "Vasya")
    {
        $hello = 'Hello!';
        $hi = "Hi!";
        //return $this->render('index', ['var' => $hello, 'hi' => "Hi!"]); //index - название вида, который надо обработать
        return $this->render('index', compact('hello', 'hi', 'name')); //альтернативный способ передачи переменных в вид
    }

    public function actionTest ()
    {
        return $this->render('test');
    }

    public function actionHello ()
    {
        return $this->render('hello');
    }
}