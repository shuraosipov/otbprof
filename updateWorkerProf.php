<html>
	<head>
		<title>������ ���������</title>

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
if (!isset($_POST['titleprof']))
	{
		echo "<p class=\"red\">��������� ��� ����!</p>";
	}
else
{$id = $_POST['id_worker'];
$titleprof = $_POST['titleprof'];
$linkkey = $id;
$query = "INSERT INTO `workers_prof` (linkkey, titleprof) VALUES('$linkkey', '$titleprof')";
$result = mysql_query($query) or die ("���������� ��������� ������ : ".mysql_error());

echo "<p class=\"green\"> ������ <b>$titleprof</b> ������� ��������� � ������ ��������� </p> ";
}

echo <<<HERE
<br />
<a href="allWorkers.php">���������� ����</a>

HERE;


?>

</td>

     </tr>

</table>
</body>
</html>