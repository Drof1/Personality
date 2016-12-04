<?php

return array(
    'news/([0-9]+)' => 'news/view/$1', // actoinView in NewsController
    'news/page-([0-9]+)' => 'news/index/$1', //actionIndex in NewsController
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/post' => 'cabinet/index',
    'cabinet/heteronym' => 'cabinet/heteronym', //actionHeteronym in CabinetController
);