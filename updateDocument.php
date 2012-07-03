<html>
	<head>
		<title>Список документов</title>

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
$linkkey = $_POST['profession'];
$titledoc = $_POST['titledoc'];
$typedoc = $_POST['typedoc'];

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$datep = "$day.$month.$year";
$date_plus = $_POST['dateo'];
$dateo = date('d.m.Y', strtotime($date_plus, strtotime($datep)));


$sql = "INSERT INTO `workers_docs` (linkkey,titledoc,typedoc,datep,dateo)
			   VALUES ('$linkkey','$titledoc','$typedoc','$datep','$dateo')";
$result = mysql_query($sql) or die ("Невозможно выполнить запрос :".mysql_error());
echo "<p class=\"green\"> Документ <b>$titledoc</b> успешно добавлен</p>";

echo "<a href=\"allWorkers.php\">Предыдущая страница</a>";




?>

</td>
		</tr>


</table>

</body>

</html>