<html>
	<head>
	  <title>Просмотр данных сотрудника</title>
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
<h5 class="title">Информация о сотруднике</h5>

<?php
require_once 'login.php';

$id = $_POST['id_w'];
###############################################
#                                             #
#		Вывод данных сотрудника       		  #
#                                             #
###############################################


echo <<<ADDDOC
<table class="button">
<tr>
<td class="button">
<form method="post" action="addDocument.php">
<input type="hidden" name="document" value=$id>
<input type="submit" value="Добавить документ">
</form>
</td>

<td class="button">
<form method="post" action="addWorkerProf.php">
<input type="hidden" name="profession" value=$id>
<input type="submit" value="Добавить специальность">
</form>
</td>
</tr>
</table>
ADDDOC;



echo "<table width=\"100%\">";
	echo "<tr class=\"first\">

		     <td>№ п/п</td>
			 <td>Фамилия</td>
			 <td>Имя</td>
			 <td>Отчество</td>
			 <td>Участок</td>

		</tr>";
$sql_worker = "SELECT id, surname, name, secondname, rsu FROM `workers` WHERE id='$id'";
$result = mysql_query($sql_worker) or die ("Невозможно выполнить запрос : ".mysql_error());
while ($m = mysql_fetch_array($result))
{echo <<<vivod
		<tr>
			<td>$m[0]</td>
			<td>$m[1]</td>
			<td>$m[2]</td>
			<td>$m[3]</td>
			<td>$m[4]</td>
		</tr>
</table>
vivod;}



$sql_prof = "SELECT workers_prof.id, profession.titleprof
			FROM `profession`,`workers_prof`
			WHERE workers_prof.linkkey='$id'
			AND workers_prof.titleprof = profession.id";
$result = mysql_query ($sql_prof) or die ("Невозможно выполнить запрос : ".mysql_error());
while ($q = mysql_fetch_array($result))
{
	$id_workerprof = $q[0];
	echo "<table width=\"100%\">";
	echo "<tr>

		     <td class=\"zagolovok\" colspan=\"100%\">Специальность :  <b>$q[1]</b></td>
             <td align=\"center\" class=\"zagolovok\">
             <form method=\"POST\" action=\"deleteWorkerProfession.php\">
             <input type=\"hidden\" name=\"id_profession\" value=$id_workerprof>
             <input type=\"image\" src=\"images/delete.ico\" name=\"submit\">
             </form></td>

		</tr>";
    echo	"<tr class=\"second\">
				 <td>Наименование документа</td>
				 <td>Тип документа</td>
				 <td>Дата последнего прохождения</td>
				 <td>Дата следующего прохождения</td>
			</tr>";

	$sql_doc = "SELECT titledoc, typedoc, datep, dateo FROM `workers_docs` WHERE linkkey='$id_workerprof'";
	$result_doc = mysql_query ($sql_doc) or die ("Невозможно выполнить запрос : ".mysql_error());
	while ($f = mysql_fetch_array($result_doc))
		{
	echo "
	        <tr>
				<td>$f[0]</td>
				<td>$f[1]</td>
				<td>$f[2]</td>
				<td>$f[3]</td>
				<td align=\"center\">";
			$sql_id_doc = "SELECT * FROM `workers_docs";
    		$result_id_doc = mysql_query($sql_id_doc) or die("Невозможно выполнить запрос : ".mysql_error());
    		while ($doc = mysql_fetch_array($result_id_doc))
             $id_wdocs = $doc['id'];

    		{

echo       "<form method=\"POST\" action=\"deleteWorkerDocument.php\">

	                <input type=\"hidden\" name=\"id_wdocs\" value=$id_wdocs>
	                <input type=\"image\" src=\"images/delete.ico\" title=\"Удалить документ\">
			</form>";




			}
echo     "</td>	";

		}
echo "</table>";
}







?>

		</td>
	</tr>
</table>

	</body>

</html>