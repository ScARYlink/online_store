<?php
/**
 * Created by PhpStorm.
 * User: ScARYlink
 * Date: 27.10.2017
 * Time: 16:29
 */

class News {

    //возырвт одной новости по id
    public static function getNewsItemById($id) {
        //запрос к БД
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * from news WHERE id='.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }
    }

    //возврат массива с новостями
    public static function getNewsList() {
        //запрос к БД

    }
}