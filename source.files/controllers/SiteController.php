<?php
/**
 * Created by PhpStorm.
 * User: ScARYlink
 * Date: 07.11.2017
 * Time: 14:39
 */

include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Product.php';

class SiteController {

    public function actionIndex() {

        //отображение категорий
        $categories = array();
        $categories = Category::getCategoriesList();

        //отображение продуктов
        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(3);

        require_once(ROOT.'/views/site/index.php');

        return true;
    }
}