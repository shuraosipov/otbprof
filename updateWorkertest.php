<html>
	<head>
	  <title>Добавление сотрудника</title>
	</head>
	    <link rel="stylesheet" href="style/main_style.css" type="text/css">
		<link rel="shortcut icon" href="images/main.ico" type="text/x-ico">
	<body>
<h1 class="main" align="center">Прохождение профессионального обучения</h1>

<table class="main">
	<tr>
       	<td class="mainLeft">
 			<?php include 'leftside.php';?>
    	</td>

		<td class="mainRight">

<?php
require_once 'login.php';


echo <<<HERE

		<form method="POST" action="updateWorkertest.php">
		<table border="0">
		<tr>
			<td>
				Фамилия<br><br>
				Имя<br><br>
				Отчество<br><br>
				Номер Участка<br><br>
			</td>
			<td>
				<input type="text"   name="surname"><br><br>
				<input type="text" 	 name="name"> <br><br>
				<input type="text"   name="secondname"> <br><br>
				<input type="text"   name="rsu"> <br><br>
			</td>

		</tr>
		<tr>
			<td>
			 <td>
				<input type="submit" value="Записать изменения">
				<a href="allWorkers.php">Вернуться в предыдущее меню</a>

			 </td>
			</td>
		</tr>
		</table>
		</form>

HERE;

if ( (!isset($_POST['surname'])) ||
	 (!isset($_POST['name'])) ||
	 (!isset($_POST['secondname'])) ||
	 (!isset($_POST['rsu'])))
	{
		echo "<p class=\"red\">Заполните все поля!</body>";
	}

else
	{
		$surname = $_POST['surname'];
		$name 	 = $_POST['name'];
		$secondname 	 = $_POST['secondname'];
		$rsu 	 = $_POST['rsu'];

		$query = "INSERT INTO `workers` (surname, name, secondname, rsu) VALUES ('$surname', '$name', '$secondname', '$rsu')";
		$result = mysql_query($query) or die ("Невозможно выполнить запрос : ".mysql_error());
echo <<<HER
		<pre>
		<p class="green">Пользователь <b>$surname $name $secondname</b> успешно добавлен.</p>

		<a href="allWorkers.php">Продолжить</a>
		</pre>
HER;
	}


?>
			</center>
		</td>
</table>

	</body>

</html>


	</body>

</html>