<?php

class Cabinet 
{    
    /**
     * Возвращает массив гетеронимов пользователя для списка на сайте
     * @return array <p>Surrogates</p>
     */
    public static function getSurrogatesList($session)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'SELECT id, name FROM surrogates WHERE '
                .'user_id = '. $session .' ORDER BY name ASC';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->query($sql);
        $i = 0;
        $surrogatesList = array();
        while ($row = $result->fetch()) {
            $surrogatesList[$i]['id'] = $row['id'];
            $surrogatesList[$i]['name'] = $row['name'];
            $i++;
        }
        return $surrogatesList;
    }
    
    public static function addSurrogate($name, $session) {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO surrogates ( name, user_id) '
                .'VALUES (:name, :user_id)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $session, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        return $result->execute();
    }
    
    public static function Publication($title, $short_content, $content,$surrogates_id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO news ( title, short_content, content, author_id) '
                . 'VALUES (:title, :short_content, :content, :author_id)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':short_content', $short_content, PDO::PARAM_STR);
        $result->bindParam(':content', $content, PDO::PARAM_STR);
        $result->bindParam(':author_id', $surrogates_id, PDO::PARAM_INT);
        return $result->execute();
    }
}