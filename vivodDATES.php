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

$day = mysql_real_escape_string($_POST['day']);
$month = mysql_real_escape_string($_POST['month']);
$year = mysql_real_escape_string($_POST['year']);
$dateo = "$day.$month.$year";
echo "<h5 class=\"title\"> Данные по периоду действия документов на $dateo </h5>";




		$sql_w = "SELECT *
				FROM `workers`, `workers_prof`, `workers_docs`
				WHERE workers.id = workers_prof.linkkey
				AND workers_prof.id = workers_docs.linkkey
				AND dateo < '$dateo'
				GROUP BY workers.id";
		$result_w = mysql_query($sql_w) or die ("Невозможно выполнить запрос : ".mysql_error());
			while ($w = mysql_fetch_array($result_w))
			{				$id_w = $w[0];
				echo "<table width=\"100%\" cellspacing=\"0\">
				        <tr class=\"first\">
				        	<td>Фамилия</td>
				        	<td>Имя</td>
				        	<td>Отчество</td>
				        	<td>Номер участка</td>
						</tr>
						<tr class=\"first\">
						    <td>$w[1]</td>
						    <td>$w[2]</td>
						    <td>$w[3]</td>
						    <td>$w[4]</td>
						</tr>

                ";
				$sql_p = "SELECT *
						  FROM `workers_prof`
						  WHERE linkkey = '$id_w'";
				$result_p = mysql_query ($sql_p) or die ("Невозмонжно выполнить запрос : ".mysql_error());
					while ($p = mysql_fetch_array($result_p))
						{
							$id_p = $p[0];
							echo "
							<tr class=\"second\">
								<td colspan=\"100%\">Специальность : <b>$p[2]</b></td>
							</tr>

							<tr class=\"second\">
											<td class=\"second\">Наименование документа</td>
											<td class=\"second\">Вид документа</td>
											<td class=\"second\">Дата получения документа</td>
											<td class=\"second\">Дата окончания действия документа</td>
										</tr>
							";

							$sql_d = "SELECT *
									  FROM `workers_docs`
									  WHERE linkkey = '$id_p'
									  AND dateo <= '$dateo'";

							$result_d = mysql_query($sql_d) or die ("Невозмонжно выполнить запрос : ".mysql_error());
								while ($d = mysql_fetch_array($result_d))
									{										echo "

										<tr class=\"second\">
											<td>$d[1]</td>
											<td>$d[2]</td>
											<td>$d[3]</td>
											<td>$d[4]</td>
										</tr>


										 ";

									}


						}			}





?>

</td>

     </tr>

</table>
</body>
</html>