<?php
// �������� �������
$host = "localhost";

// ��� ������������ MySQL, ��� ������� ������������ �����������
$user = "root";

// ������ ��� �����������
$password = "12345";

// ��� ���� ������
$database = "otbprof";

// ����������� � MySQL
$connect = mysql_connect($host, $user, $password) or die ("���������� ������������ � MYSQL : ".mysql_error());

// ����������� � ���� ������
mysql_select_db($database) or die ("��� ����������� � ���� ������ : ".mysql_error());

date_default_timezone_set('Europe/Moscow');
// ��������� ������
setlocale(LC_ALL, 'ru_RU.CP1251', 'rus_RUS.CP1251', 'Russian_Russia.1251', 'russian');
// ��������� ����������� � ���� ������
mysql_query('SET names "cp1251"');



?>