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
$id =$_POST['id'];

$sql = "DELETE FROM `documents` WHERE id='$id'";
$result = mysql_query($sql) or die ("���������� ��������� ������ : ".mysql_error());

echo <<< HERE
<pre>
�������� ������.

<a href="documents.php">����������</a>
HERE;



?>


				</td>
		</tr>


</table>

</body>

</html>