<html>
	<head>
		<title>������ �����������</title>
	        <link rel="stylesheet" href="style/main_style.css" type="text/css">
	        <link rel="shortcut icon" href="images/main.ico" type="text/x-ico">
	</head>
	<body>

<h1 class="main" align="center">����������� ����������������� ��������</h1>

<table class="main">
	<tr>
 		<td class="mainLeft">
        	<?php require 'leftside.php';?>
		</td>

 		<td class="mainRight">
<?php
require_once 'login.php';

###########����������#########
$rsu = mysql_real_escape_string($_POST['rsu']);        #
#$day = $_POST['day'];        #
#$month = $_POST['month'];    #
#$year = $_POST['year'];      #
#$dateo = "$day.$month.$year";#
##############################
echo "<h5 class=\"title\"> ����� �� ��������-������������� ������� � $rsu </h5>";




##############################
######���������� �������######
##############################



// ������ �� ������� �����������, ������������� � ������������� ���.
$sql_w = "SELECT workers.id, workers.surname, workers.name, workers.secondname, rsu.number
FROM `workers`,`rsu`
WHERE workers.rsu = '$rsu'
GROUP BY workers.id";

$result_w = mysql_query($sql_w) or die ("���������� ��������� ������ : ".mysql_error());

	while ($w = mysql_fetch_array($result_w))
		{				$id_w = $w[0];			echo "  <table  width=\"100%\" cellspacing=\"0\">
				    <tr class=\"first\">

						 <td>�������</td>
						 <td>���</td>
						 <td colspan=\"100%\">��������</td>
					</tr>

					<tr class=\"first\">

						<td>$w[1]</td>
						<td>$w[2]</td>
						<td colspan=\"100%\">$w[3]</td>
					</tr>
			";
            // ������ �� ������� �������������� � ����������
			$sql_p = "SELECT workers_prof.id,profession.titleprof
					  FROM `workers_prof`,`profession`
					  WHERE workers_prof.linkkey = '$id_w'
					  AND profession.id = workers_prof.titleprof";
			$result_p = mysql_query($sql_p) or die ("���������� ��������� ������ : ".mysql_error());

				while ($p = mysql_fetch_array($result_p))
					{						$id_p = $p[0];

						echo "
								<tr class=\"second\">
									<td colspan=\"100%\">������������� : <b>$p[1]</b> </td>
								</tr>

								<tr class=\"second\">
									<td class=\"second\">������������ ���������</td>
									<td class=\"second\">��� ���������</td>
									<td class=\"second\">���� ��������� ���������</td>
									<td class=\"second\">���� ��������� �������� ���������</td>
								</tr>
						";
					//������ �� ������� ���������� �� �������������
					$sql_d = "SELECT titledoc, typedoc, datep, dateo
							  FROM `workers_docs`
							  WHERE linkkey='$id_p'";
					$result_d = mysql_query($sql_d) or die ("���������� ��������� ������ : ".mysql_error());

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