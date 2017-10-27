<?php
/**
 * Created by PhpStorm.
 * User: ScARYlink
 * Date: 24.10.2017
 * Time: 17:07
 */

include_once ROOT. '/models/News.php';

class NewsController {

    public function actionIndex() {
        echo 'Список новостей';
        return true;
    }

    public function actionView($category, $id) {
        //echo '<br>'.$category;
        //echo '<br>'.$id;
        echo 'Просмотр одной новости';
        return true;
    }
}