<?php
/**
 * Created by PhpStorm.
 * User: ScARYlink
 * Date: 24.10.2017
 * Time: 17:07
 */

class NewsController {

    public function actionIndex() {
        echo 'Список новостей';
        return true;
    }

    public function actionView($category, $id) {
        echo '<br>'.$category;
        echo '<br>'.$id;

        return true;
    }
}