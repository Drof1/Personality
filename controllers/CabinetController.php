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
        // Подключаем вид
        
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
            $session = $_SESSION['user'];

                // Записываем публикацию
                $result = Cabinet::Publication($title, $short_content, $content, $session);
        }
        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    }
}