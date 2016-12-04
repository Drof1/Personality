<?php

class Cabinet {
    public static function Publication($title, $short_content, $content,$session)
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
        $result->bindParam(':author_id', $session, PDO::PARAM_INT);
        return $result->execute();
    }
}