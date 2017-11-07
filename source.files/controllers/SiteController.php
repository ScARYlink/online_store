<?php
/**
 * Created by PhpStorm.
 * User: ScARYlink
 * Date: 07.11.2017
 * Time: 14:39
 */

class SiteController {

    public function actionIndex() {
        require_once(ROOT.'/views/site/index.php');

        return true;
    }
}