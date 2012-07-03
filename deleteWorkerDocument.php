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
$id_wdocs = $_POST['id_wdocs'];

$sql = "DELETE FROM workers_docs WHERE id='$id_wdocs'";

if ($result = mysql_query($sql))
   	{
   	   echo "Документ удален.";
   	}

   	else
   	{
   		die ("Невозможно выполнить запрос :  ".mysql_error());
   	}

echo "<br /><br /><a href=\"allWorkers.php\">Продолжить</a>";
?>


				</td>
		</tr>


</table>

</body>

</html>