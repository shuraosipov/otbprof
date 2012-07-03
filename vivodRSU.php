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
        	<?php require 'leftside.php';?>
		</td>

 		<td class="mainRight">
<?php
require_once 'login.php';

###########Переменные#########
$rsu = mysql_real_escape_string($_POST['rsu']);        #
#$day = $_POST['day'];        #
#$month = $_POST['month'];    #
#$year = $_POST['year'];      #
#$dateo = "$day.$month.$year";#
##############################
echo "<h5 class=\"title\"> Отчет по ремонтно-строительному участку № $rsu </h5>";




##############################
######Построение таблицы######
##############################



// Запрос на выборку сотрудников, принадлежащих к определенному РСУ.
$sql_w = "SELECT workers.id, workers.surname, workers.name, workers.secondname, rsu.number
FROM `workers`,`rsu`
WHERE workers.rsu = '$rsu'
GROUP BY workers.id";

$result_w = mysql_query($sql_w) or die ("Невозможно выполнить запрос : ".mysql_error());

	while ($w = mysql_fetch_array($result_w))
		{				$id_w = $w[0];			echo "  <table  width=\"100%\" cellspacing=\"0\">
				    <tr class=\"first\">

						 <td>Фамилия</td>
						 <td>Имя</td>
						 <td colspan=\"100%\">Отчество</td>
					</tr>

					<tr class=\"first\">

						<td>$w[1]</td>
						<td>$w[2]</td>
						<td colspan=\"100%\">$w[3]</td>
					</tr>
			";
            // Запрос на выборку специальностей у сотрудника
			$sql_p = "SELECT workers_prof.id,profession.titleprof
					  FROM `workers_prof`,`profession`
					  WHERE workers_prof.linkkey = '$id_w'
					  AND profession.id = workers_prof.titleprof";
			$result_p = mysql_query($sql_p) or die ("Невозможно выполнить запрос : ".mysql_error());

				while ($p = mysql_fetch_array($result_p))
					{						$id_p = $p[0];

						echo "
								<tr class=\"second\">
									<td colspan=\"100%\">Специальность : <b>$p[1]</b> </td>
								</tr>

								<tr class=\"second\">
									<td class=\"second\">Наименование документа</td>
									<td class=\"second\">Тип документа</td>
									<td class=\"second\">Дата получения документа</td>
									<td class=\"second\">Дата окончания действия документа</td>
								</tr>
						";
					//Запрос на выборку документов по специальности
					$sql_d = "SELECT titledoc, typedoc, datep, dateo
							  FROM `workers_docs`
							  WHERE linkkey='$id_p'";
					$result_d = mysql_query($sql_d) or die ("Невозможно выполнить запрос : ".mysql_error());

						while ($d = mysql_fetch_array($result_d))
							{
								echo "
									<tr class=\"second\">
										<td>$d[0]</td>
										<td>$d[1]</td>
										<td>$d[2]</td>
										<td>$d[3]</td>
									</tr>
								";

							}

					}

		echo "</table>";
		}



?>

			</td>
     </tr>

</table>
</body>
</html>