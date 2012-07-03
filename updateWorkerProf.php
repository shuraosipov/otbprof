<html>
	<head>
		<title>Список профессий</title>

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

<?php
require_once 'login.php';
if (!isset($_POST['titleprof']))
	{
		echo "<p class=\"red\">Заполните все поля!</p>";
	}
else
{$id = $_POST['id_worker'];
$titleprof = $_POST['titleprof'];
$linkkey = $id;
$query = "INSERT INTO `workers_prof` (linkkey, titleprof) VALUES('$linkkey', '$titleprof')";
$result = mysql_query($query) or die ("Невозможно выполнить запрос : ".mysql_error());

echo "<p class=\"green\"> Запись <b>$titleprof</b> успешно добавлена в список профессий </p> ";
}

echo <<<HERE
<br />
<a href="allWorkers.php">Предыдущее меню</a>

HERE;


?>

</td>

     </tr>

</table>
</body>
</html>