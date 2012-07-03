<html>
	<head>
	  <title>Создание документа</title>
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
<h5 class="title">Добавление документа в базу данных</h5>
<?php
require_once 'login.php';

$id = $_POST['document'];


echo "

		<form method=\"POST\" action=\"updateDocument.php\" onsubmit=\"if((!this.titledoc.value) || (!this.typedoc.value))
															{alert('Вы ввели не все данные!');return false}\">
		<table align=\"center\" border=\"0\">
		<tr>
			<td valign=\"top\">
				Специальность : <br /><br />
				Название документа : <br><br>
				Тип документа : <br><br>
				Последнее обучение : <br><br>
				Срок действия документа : <br /><br />
            </td>

			<td valign=\"top\">";
$select_prof = "SELECT * FROM `workers_prof` WHERE linkkey = '$id'";
$result_prof = mysql_query($select_prof) or die ("Невозможно выполнить запрос : ".mysql_error);

// Подстановка выбранных записей в выпадающее меню
echo "<select class=\"main\" name=\"profession\">";
while ($q = mysql_fetch_array($result_prof))

{
	echo"	<option value=$q[0]>$q[2]</option>";
}


echo " </select><br><br>";

echo "

				<input type=\"text\"   name=\"titledoc\" size=\"50\"><br><br>
				<input type=\"text\"   name=\"typedoc\" size=\"50\"> <br><br>";
				include 'days.php';
echo "          <br /><br />
				<input type=\"radio\" name=\"dateo\" value=\"+1 year\" checked>Год
				<input type=\"radio\" name=\"dateo\" value=\"+2 year\">Два
				<input type=\"radio\" name=\"dateo\" value=\"+3 year\">Три
				<input type=\"radio\" name=\"dateo\" value=\"+4 year\">Четыре
				<input type=\"radio\" name=\"dateo\" value=\"+5 year\">Пять";






echo "		</td>

		</tr>
		<tr align=\"center\">
			<td colspan=\"100%\">

				<input type=\"submit\" value=\"Создать документ\">

			</td>
		</tr>
		</table>
		</form>";

?>

		</td>


</table>
</body>
</html>