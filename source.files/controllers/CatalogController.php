<?php
/**
 * Created by PhpStorm.
 * User: ScARYlink
 * Date: 13.11.2017
 * Time: 23:02
 */

include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Product.php';

class CatalogController {

    public function actionIndex() {

        //отображение категорий
        $categories = array();
        $categories = Category::getCategoriesList();

        //отображение продуктов
        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(12);

        require_once(ROOT.'/views/catalog/index.php');

        return true;
    }

    public function actionCategory($categoryId) {

        $categories = array();
        $categories = Category::getCategoriesList();

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId);

        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }
}