<?php

return array(
    'news/([0-9]+)' => 'news/view/$1', // actoinView in NewsController
    'news/page-([0-9]+)' => 'news/index/$1', //actionNews in NewsController
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'cabinet' => 'cabinet/index',
//    'news' => 'news/index', // actionIndex in NewsController
//    'news/([0-9]+)' => 'news/view',
//    'products' => 'product/list', // actionList in ProductController
);