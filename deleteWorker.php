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
				<?php require 'leftside.php'; ?>
			</td>

	  		<td class="mainRight">

<?php
	require_once 'login.php';
    $id = $_POST['id_w'];
	$sql_query = "DELETE FROM workers WHERE id='$id'";
	$result = mysql_query($sql_query) or die ("���������� ��������� ������ : ".mysql_error());

echo <<< HERE
<pre>
��������� ������.

<a href="allWorkers.php">����������</a>
HERE;


?>
			</td>
	</table>
	</body>
</html>