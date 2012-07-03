<?php
// Название сервера
$host = "localhost";

// Имя пользователя MySQL, под которым производится подключение
$user = "root";

// Пароль для подключения
$password = "12345";

// Имя базы данных
$database = "otbprof";

// Подключение к MySQL
$connect = mysql_connect($host, $user, $password) or die ("Невозможно подключиться к MYSQL : ".mysql_error());

// Подключение к базе данных
mysql_select_db($database) or die ("Нет подключения к базе данных : ".mysql_error());

date_default_timezone_set('Europe/Moscow');
// Настройка локали
setlocale(LC_ALL, 'ru_RU.CP1251', 'rus_RUS.CP1251', 'Russian_Russia.1251', 'russian');
// Настройка подключения к базе данных
mysql_query('SET names "cp1251"');



?>