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

<?php
require_once 'login.php';
$id_wdocs = $_POST['id_wdocs'];

$sql = "DELETE FROM workers_docs WHERE id='$id_wdocs'";

if ($result = mysql_query($sql))
   	{
   	   echo "�������� ������.";
   	}

   	else
   	{
   		die ("���������� ��������� ������ :  ".mysql_error());
   	}

echo "<br /><br /><a href=\"allWorkers.php\">����������</a>";
?>


				</td>
		</tr>


</table>

</body>

</html>