<html>
	<head>
		<title>������ ����������</title>

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
<h5 class="title">���������� ��������� ��� ����������</h5>
<?php
require_once 'login.php';

// ������� ���� ������� �� ������� `workers`
$select_workers = "SELECT * FROM `workers`";
$result_workers = mysql_query($select_workers) or die ("���������� ��������� ������ : ".mysql_error());

// ����������� ������� � ���������� ������
echo "<select class=\"main\" name=\"titleprof\">";
while ($z = mysql_fetch_array($result_workers))
{
	echo "<option value=$z[1]>$z[1]$z[2]$z[3]</option>";
	}

echo "</select><br><br>";




?>


			</td>


</table>
</body>
</html>