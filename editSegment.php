<html>
	<head>
		<title>��������� ������ ����������</title>
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
<h5 class="title">��������� ������������ ������ ����������</>
<?php
// ����������� � MySQL � ����.
require_once 'login.php';

// �������� �� ������� ���������� radio-button'�.
if (!isset($_POST['id_index']))
	{
echo <<<HERE
<p class="red">
�� ������ ��������� ��� ��������������
</p>
<a href="allWorkers.php">� ���������� ����</a><br>
HERE;

	}
else
	{
// ��������� ���������� � ��������� radio-button'�.
	$id_worker = $_POST['id_index'];

// ������ �� ��������� ����������, � �������� ������ radio-button.



	$sql_query = "SELECT * FROM `workers` WHERE id=$id_worker";
	$result = mysql_query($sql_query);
    $q = mysql_fetch_array($result);



 // ����� � ���� ���� ������ � ��������� ����������.
echo <<<HERE

		<form method="POST" action="updateWorker.php">
		<table border="0">
		<tr>
			<td>
				�������<br><br>
				���<br><br>
				��������<br><br>
				����� �������<br><br>
			</td>
			<td>
				<input type="hidden" name="id" value=$q[0]>
				<input type="text"   name="surname" value=$q[1]>   	<br><br>
				<input type="text" 	 name="name" value=$q[2]> <br><br>
				<input type="text"   name="secondname" value=$q[3]> <br><br>
				<input type="text"   name="rsu" value=$q[4]> <br><br>
			</td>

		</tr>
		<tr>
			<td>
			 <td>
				<input type="submit" value="����������� ���������">
				<br />
				<br />
				<a href="allWorkers.php">��������� � ���������� ����</a>

			 </td>
			</td>
		</tr>
		</table>
		</form>


HERE;





	}







?>
		</td>

	</table>
	</body>
</html>