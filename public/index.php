<?php

require 'vendor/autoload.php';

use PostgreSQL\Connection;
use PostgreSQL\PostgreSQLCreateTable;
//Пользователь зашел на страницу
session_start();

try {
    //Подключение к бд
    $pdo = Connection::get()->connect();
    //Создание таблиц
    $tableCreator = new PostgreSQLCreateTable($pdo);
    $tableCreator->createTables();
} catch (\PDOException $e) {
    echo $e->getMessage();
}

//При выполнении тестового я не был уверен могу ли я пользоваться библиотеками, поэтому сделал через get запросы, 
//а так предпочёл бы slim
//Если используем поиск
if (isset($_GET['searchInput'])) {
    $trimText = trim($_GET['searchInput']);
    if (strlen($trimText)<3){
        $errors = "Минимум, 3 символа";
    } else {
        $stmt = $pdo->prepare(
            "SELECT comments.postId, comments.id, 
                comments.name, comments.email, 
                comments.body, posts.title 
            FROM comments INNER JOIN posts
            ON comments.postId = posts.id
            WHERE comments.body LIKE :trimText "
        );
        $trimText = "%$trimText%";
        $stmt->bindParam(":trimText", $trimText);
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $stmt->closeCursor(); 
    }
} elseif (isset($_GET['download'])) {
    //Если нажали на кнопку загрузить данныу
    try {
        require (__DIR__. '/../script');
    } catch (Exception $e) {
        // обработка ошибки
        $errors = "Повторная загруска данных невозможна до их удаления ";
    };
};
//импорт фронтовой части приложения
include __DIR__ . "/../templates/index.php";
