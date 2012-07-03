<html>
	<head>
		<title>Изменение данных сотрудника</title>
			<link rel="stylesheet" href="style/main_style.css" type="text/css">
			<link rel="shortcut icon" href="images/main.ico" type="text/x-ico">
	</head>
	<body>
	<h1 class="main" align="center">Прохождение профессионального обучения</h1>

	<table class="main">
		<tr>
        	<td class="mainLeft">
	  			<?php require 'leftside.php';?>
			</td>

			<td class="mainRight">
<h5 class="title">Изменение персональных данных сотрудника</>
<?php
// Подключение к MySQL и базе.
require_once 'login.php';

// Проверка на наличие выбранного radio-button'а.
if (!isset($_POST['id_index']))
	{
echo <<<HERE
<p class="red">
Не выбран сотрудник для редактирования
</p>
<a href="allWorkers.php">В предыдущее меню</a><br>
HERE;

	}
else
	{
// Получение информации о выбранном radio-button'е.
	$id_worker = $_POST['id_index'];

// Запрос на получение сотрудника, у которого выбран radio-button.



	$sql_query = "SELECT * FROM `workers` WHERE id=$id_worker";
	$result = mysql_query($sql_query);
    $q = mysql_fetch_array($result);



 // Вывод в поля всех данных о выбранном сотруднике.
echo <<<HERE

		<form method="POST" action="updateWorker.php">
		<table border="0">
		<tr>
			<td>
				Фамилия<br><br>
				Имя<br><br>
				Отчество<br><br>
				Номер Участка<br><br>
			</td>
			<td>
				<input type="hidden" name="id" value=$q[0]>
				<input type="text"   name="surname" value=$q[1]>   	<br><br>
				<input type="text" 	 name="name" value=$q[2]> <br><br>
				<input type="text"   name="secondname" value=$q[3]> <br><br>
				<input type="text"   name="rsu" value=$q[4]> <br><br>
			</td>

		</tr>
		<tr>
			<td>
			 <td>
				<input type="submit" value="Подтвердить изменения">
				<br />
				<br />
				<a href="allWorkers.php">Вернуться в предыдущее меню</a>

			 </td>
			</td>
		</tr>
		</table>
		</form>


HERE;





	}







?>
		</td>

	</table>
	</body>
</html>