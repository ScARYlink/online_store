<?php
/**
 * Created by PhpStorm.
 * User: ScARYlink
 * Date: 08.11.2017
 * Time: 14:54
 */

class ProductController {

    public function actionView($id) {

        require_once(ROOT.'/views/product/view.php');

        return true;
    }
}