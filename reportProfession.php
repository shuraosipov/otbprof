<html>
	<head>
	  <title>Отчеты</title>
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

<h5 class="title"> Выберите специальность для формирования отчета </h5>
<?php
require_once 'login.php';

echo "<center>";
// Запрос вы выборку специальностей и вывод их в список
echo "<form method=\"GET\" action=\"vivodProfession.php\">";


$sql_rsu = "SELECT * FROM `profession`";

$result = mysql_query($sql_rsu) or die ("Невозможно выполнить запрос".mysql_error);

echo "Выберите специальность : <select name=\"id_prof\">";
while ($q = mysql_fetch_array($result))
	{
        $titleprof = $q[1];
    	echo "<option value=$q[0]>$q[1]</option>";

	}
echo "</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<input type=\"submit\" name=\"vivod\" value=\"Сформировать отчет\">
      <input type='hidden' name='titleprof' value=$titleprof>

		</form>";
echo "</center>";



?>

</td>

     </tr>

</table>
</body>
</html>




