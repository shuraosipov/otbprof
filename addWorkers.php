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
<h5 class="title">Добавление нового сотрудника в базу данных </h5>

<?php

require_once 'login.php';

// Поля для заполния данных сотрудника
echo <<<HERE

		<form method="POST" action="addWorkers.php" onsubmit="if((!this.surname.value) || (!this.name.value) || (!this.secondname.value))
													{alert('Вы ввели не все данные !');return false}">
		<table align="center" border="0" width="100%">
		<tr>
			<td valign="top">
				Фамилия<br>
				<input type="text"   name="surname"   size="50"><br><br>
				Имя<br>
				<input type="text" 	 name="name" 	  size="50"> <br><br>
				Отчество<br>
				<input type="text"   name="secondname" size="50"> <br><br>
			</td>
			<td valign="top">РСУ № <br>
HERE;

// Выборка всех записей из таблицы `rsu`
$select_rsu = "SELECT * FROM `rsu`";
$result_rsu = mysql_query($select_rsu) or die ("Невозможно выполнить запрос : ".mysql_error());

// Подстановка выбранных записей в выпадающее меню
echo "<select class=\"main\" name=\"rsu\">";
while ($q = mysql_fetch_array($result_rsu))
{
	echo"	<option value=$q[0]>$q[1]</option>";
}

echo " </select></td><br><br>";

echo "<td valign=\"top\">Специальность<br>";

// Выборка всех записей из таблицы `profession`
$select_titleprof = "SELECT * FROM `profession`";
$result_titleprof = mysql_query($select_titleprof) or die ("Невозможно выполнить запрос : ".mysql_error());

// Подстановка записей в выпадающий список
echo "<select class=\"main\" name=\"titleprof\">";
while ($z = mysql_fetch_array($result_titleprof))
{	echo "<option value=$z[0]>$z[1]</option>";
	}

echo "</select><br><br></td></tr>";

echo <<<HER
		<tr>
			<td align="right" colspan="100%">
			<input type="submit" value="Добавить запись">
			</td>
		</tr>
	</table>
</form>
HER;


if	( (!isset($_POST['surname'])) ||
	 (!isset($_POST['name'])) ||
	 (!isset($_POST['secondname'])) ||
	 (!isset($_POST['rsu'])) ||
	 (!isset($_POST['titleprof']))
	)
	{		echo "<p class=\"red\">Заполните все поля!</body></p>";
	}

else
	{
		$surname = $_POST['surname'];
		$name 	 = $_POST['name'];
		$secondname 	 = $_POST['secondname'];
		$rsu 	 = $_POST['rsu'];
        $titleprof = $_POST['titleprof'];

		$query_insertWorker = "INSERT INTO `workers` (surname, name, secondname, rsu)
							VALUES ('$surname', '$name', '$secondname', '$rsu')";
		$result = mysql_query($query_insertWorker) or die ("Невозможно выполнить запрос : ".mysql_error());
		$id_insertworker = mysql_insert_id();

		$linkkey = $id_insertworker;

		$query_insertWorker_prof = "INSERT INTO `workers_prof` (linkkey, titleprof)
									VALUES ('$linkkey','$titleprof')";
		$result_insertWorker_prof = mysql_query($query_insertWorker_prof) or die ("Невозможно выполнить запрос : ". mysql_error());


echo <<<HER
<p class="green">Сотрудник <b>$surname $name $secondname</b>. РСУ № <b>$rsu</b>. Специальность <b>$titleprof</b>. Добавлен.</p>
HER;
	}

echo <<<HERE
<br />
<a href="allWorkers.php">Предыдущее меню</a>

HERE;

?>

		</td>
</table>

	</body>

</html>


