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
        $newsList = array();
        $newsList = News::getNewsList();
        require_once(ROOT.'/views/news/index.php');
        /*echo '<pre>';
        print_r($newsList);
        echo '</pre>';
        */
        return true;
    }

    public function actionView($id) {
        //echo '<br>'.$category;
        //echo '<br>'.$id;
        //echo 'Просмотр одной новости';

        if($id) {
            $newsItem = News::getNewsItemById($id);
        }
        print_r($newsItem);
        return true;
    }
}