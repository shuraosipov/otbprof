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
if ( (!isset($_POST['title'])) &&
	 (!isset($_POST['title'])) )
{
	echo "<p class=\"red\">��������� ��� ����!</p>";
}

else
{$id=$_POST['id'];
$title = $_POST['title'];

$update_query = "UPDATE profession SET titleprof='$title' WHERE id='$id'";

$result_update = mysql_query($update_query) or die ("���������� ��������� ������".mysql_error());
$sql	= "SELECT titleprof FROM profession WHERE id='$id'";
$edited = mysql_query($sql) or die ("���������� ��������� ������".mysql_error());

$affected_rows = mysql_affected_rows();
if ($affected_rows)
	{
 		echo "<p class=\"green\"> ������������� <b>$title</b> ������� ��������.</p><br/>";

 	}

echo <<<HERE
<br />
<a href="Professions.php">����������</a>

HERE;
}
?>

</body>

</html>