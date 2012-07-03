<html>
	<head>
		<title> Изменение данных сотрудника </title>
	</head>
	<link rel="stylesheet" href="style/main_style.css" type="text/css">
	<link rel="shortcut icon" href="images/main.ico" type="text/x-ico">
	<body>
<h1 class="main" align="center">Прохождение профессионального обучения</h1>

<table class="main">
	<tr>
 		<td class="mainLeft">
        	<?php require 'leftside.php';?>
		</td>

 		<td class="mainRight">



<?php
require_once 'login.php';

$id = $_POST['id'];
$surname = $_POST['surname'];
$name = $_POST['name'];
$secondname = $_POST['secondname'];
$rsu = $_POST['rsu'];

// Запрос на обновление данных сотрудника из таблицы workers
$sql_query = "UPDATE workers SET surname = '$surname',
								 name = '$name',
								 secondname = '$secondname',
								 rsu = '$rsu'
							WHERE id='$id'";
$result = mysql_query($sql_query) or die ("Невозможно выполнить запрос".mysql_error());

$sql	= "SELECT surname, name, secondname, rsu FROM workers
												 WHERE id='$id'";
$edited = mysql_query($sql) or die ("Невозможно выполнить запрос".mysql_error());

$affected_rows = mysql_affected_rows();
if ($affected_rows)
	{
 		echo "<p class=\"green\">Данные сотрудника <b>$surname $name $secondname</b> изменены.</p><br/>";

 	}

echo <<<HERE
<br />
<a href="allWorkers.php">Продолжить</a>

HERE;
?>
			</td>
		</tr>


</table>

</body>

</html>