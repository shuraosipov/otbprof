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


<?php
require_once 'login.php';
$id_prof = $_GET['id_prof'];
$titleprof = $_GET['titleprof'];

echo "<h5 class=\"title\"> Отчет по специальности 	:	<i>$titleprof</i></h5>";


$sql_p = "SELECT *
		  FROM `workers`, `workers_prof`, `workers_docs`
		  WHERE workers.id = workers_prof.linkkey
		  AND titleprof = '$id_prof'
		  AND workers_docs.linkkey = workers_prof.id
		  GROUP BY workers.id
		  ";

$result_p = mysql_query ($sql_p) or die ("Невозможно выполнить запрос : ".mysql_error());
while ($p = mysql_fetch_array($result_p))
		{
			$id_p = $p[9];			echo
			"
				<table width=\"100%\" cellspacing=\"0\">
					<tr class=\"first\">
						<td>Фамилия</td>
						<td>Имя</td>
						<td>Отчество</td>
						<td colspan=\"100%\">Номер участка</td>
					</tr>

					<tr class=\"first\">
						<td>$p[1]</td>
						<td>$p[2]</td>
						<td>$p[3]</td>
						<td>$p[4]</td>

					</tr>

					<tr  class=\"second\">
						<td class=\"second\">Наименование документа</td>
						<td class=\"second\">Тип документа</td>
						<td class=\"second\">Дата получения документа</td>
						<td class=\"second\">Дата окончания действия документа</td>
					</tr>";

				$sql_d = "SELECT titledoc, typedoc, datep, dateo
						  FROM `workers`, `workers_prof`, `workers_docs`
						  WHERE workers_docs.linkkey = $id_p
						  GROUP BY titledoc";
				$result_d = mysql_query($sql_d) or die ("Невозможно выполнить запро : ".mysql_error);
				while ($d = mysql_fetch_array($result_d))
				{				echo "
					<tr class=\"second\">
						<td>$d[0]</td>
						<td>$d[1]</td>
						<td>$d[2]</td>
						<td>$d[3]</td>

					</tr>

					";
				}
    			echo "</table>";

		}


?>

</td>

     </tr>

</table>
</body>
</html>