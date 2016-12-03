<?php
class NewsController
{
    public function actionIndex($page) {
        $newsList = array();
        $newsList = News::getNewsList($page);
        
        require_once (ROOT . '/views/startpage.php');
        
        return true;
    }
    public function actionView($id) {
        if($id) {
            $newsItem = News::getNewsItemById($id);
            
            echo '<pre>';
            print_r($newsItem);
            echo '</pre>';
            
            echo 'actionView';
        }
        return true;
    }    
}