<html>
	<head>
		<title>Список сотрудников</title>
			<link rel="stylesheet" href="style/main_style.css" type="text/css">
			<link rel="shortcut icon" href="images/main.ico" type="text/x-ico">
	</head>
	<body>
<h1 class="main" align="center">Прохождение профессионального обучения</h1>

	<table class="main">
		<tr>
	    	<td class="mainLeft">
				<?php require 'leftside.php'; ?>
			</td>

	  		<td class="mainRight">

<?php
	require_once 'login.php';
    $id = $_POST['id_w'];
	$sql_query = "DELETE FROM workers WHERE id='$id'";
	$result = mysql_query($sql_query) or die ("Невозможно выполнить запрос : ".mysql_error());

echo <<< HERE
<pre>
Сотрудник удален.

<a href="allWorkers.php">Продолжить</a>
HERE;


?>
			</td>
	</table>
	</body>
</html>