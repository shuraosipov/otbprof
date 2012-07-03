<html>
	<head>
		<title>Изменение профессии</title>

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
<h5 align="center">Изменение специальности</h5>
<?php
require_once 'login.php';
if (!isset($_POST['id_prof']))
{	echo "<p class=\"red\">Не выбран документ для редактирования </p>";
	echo "<a href=\"Professions.php\">Предыдущее меню</a>";}
else
{

// Выбираем документ из таблицы test, напротив которого установлено значение в radio-button.
$id_prof = $_POST['id_prof'];
$sql = "SELECT * FROM profession WHERE id='$id_prof'";
$result = mysql_query($sql);

while ($q = mysql_fetch_array($result))
{
// Создаем поле, в котором отображается название специальности
echo <<<EDIT
<form method="POST" action="updateProfession.php">
		<table border="0">
		<tr>
			<td>
				Специальность<br><br>

			</td>
			<td>
				<input type="hidden" name="id" value=$q[0]>
				<input type="text"   name="title" value=$q[1]><br><br>
			</td>

		</tr>
		<tr>
			<td>
			 <td>
				<input type="submit" value="Подтвердить изменения">
				<br />
				<br />
				<a href="Professions.php">Вернуться в предыдущее меню</a>

			 </td>
			</td>
		</tr>
		</table>
		</form>

EDIT;



}

}

?>

</body>

</html>





