<?php
/**
 * Контроллер CabinetController
 * Кабинет пользователя
 */
class CabinetController
{
    /**
     * Action для страницы "Публикация новостей пользователем"
     */
    public function actionIndex()
    {
        
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);
        // Подключаем список гетеронимов
        $nameList = Cabinet::getSurrogatesList($userId);
        // Переменные для формы
        $title = false;
        $short_content = false;
        $content = false;
        $session = false;
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $title = $_POST['title'];
            $short_content = $_POST['short_content'];
            $content = $_POST['content'];
            $surrogates_id = $_POST['surrogates_id'];
            // Записываем публикацию
            $result = Cabinet::Publication($title, $short_content, $content, $surrogates_id);
        }
        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    }
    
    public function actionHeteronym() 
    {
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);
        // Переменные для формы
        $name = false;
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $name = $_POST['name'];
            // Записываем публикацию
            $result = Cabinet::addSurrogate($name, $userId);
        }
        require_once(ROOT . '/views/cabinet/addname.php');
        return true;
    }
}