<?php
/**
 * Created by PhpStorm.
 * User: WolfGrin
 * Date: 23.04.2017
 * Time: 18:33
 */

namespace app\controllers;
use app\models\Post;
use yii\data\Pagination;


class PostController extends AppController
{
    public function actionIndex($name = "Vasya")
    {
        //$posts = Post::find()->select('id, title, excerpt')->orderBy('id DESC')->all();

        $query = Post::find()->select('id, title, excerpt')->orderBy('id DESC');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 2, 'pageSizeParam' => false, 'forcePageParam' => false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();

        //$this->debug($posts); //для метода в основном контроллере
        //debug($posts);  //для функции в файле, чт ов корневом каталоге и подключен в index.php
        return $this->render('index', compact('posts', 'pages'));
    }

    public function actionTest ()
    {
        return $this->render('test');
    }

    public function actionHello ()
    {
        $hello = 'Hello!';
        $hi = "Hi!";
        //return $this->render('hello', ['var' => $hello, 'hi' => "Hi!"]); //index - название вида, который надо обработать
        return $this->render('hello', compact('hello', 'hi', 'name')); //альтернативный способ передачи переменных в вид
    }
}