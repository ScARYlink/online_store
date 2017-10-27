<?php
/**
 * Created by PhpStorm.
 * User: ScARYlink
 * Date: 23.10.2017
 * Time: 23:40
 */

return array(
    'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',

    'news/([0-9]+)' => 'news/view',
    'news' => 'news/index', //actionIndex in NewsController
    'products' => 'products/list', //actionList in ProductController
    'news/archive' => 'news/archive',
);