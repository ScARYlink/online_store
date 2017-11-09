<?php
/**
 * Created by PhpStorm.
 * User: ScARYlink
 * Date: 07.11.2017
 * Time: 14:39
 */

include_once ROOT.'/models/Category.php';

class SiteController {

    public function actionIndex() {

        $categories = array();
        $categories = Category::getCategoriesList();

        require_once(ROOT.'/views/site/index.php');

        return true;
    }
}