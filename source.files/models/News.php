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
        $db = Db::getConnection();

        $newsList = array();

        $result = $db->query('SELECT id, title, date, short_content '
        .'FROM news '
        .'ORDER BY date DESC '
        .'LIMIT 10');

        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $newsList;
    }
}