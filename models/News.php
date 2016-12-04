<?php

class News {
    /*
     * Returns single news item with specified id
     * @param integer $id
     */
    const SHOW_BY_DEFAULT = 4;
    
    public static function getNewsItemById($id) {
        $id = intval($id);
        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM news WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $newsItem = $result->fetch();
            return $newsItem;
        }
    }

    /*
     * Returns an array of news items
     */
    public static function getNewsList($page){
        $db = Db::getConnection();
        
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        $newsList = array();
        $result = $db->query("SELECT n.id, n.title, n.date, n.short_content, s.name AS 'author_name' FROM news n INNER JOIN surrogates s ON n.author_id = s.id ORDER BY date DESC");
                //.'LIMIT ' . self::SHOW_BY_DEFAULT
                //.' OFFSET ' . $offset);
        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $newsList[$i]['author_name'] = $row['author_name'];
            $i++;
        }
        return $newsList;
    }
    
}
