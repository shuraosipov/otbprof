<html>
	<head>
	  <title>���������� ����������</title>
	</head>
	    <link rel="stylesheet" href="style/main_style.css" type="text/css">
		<link rel="shortcut icon" href="images/main.ico" type="text/x-ico">
	<body>
<h1 class="main" align="center">����������� ����������������� ��������</h1>

<table class="main">
	<tr>
       	<td class="mainLeft">
 			<?php include 'leftside.php';?>
    	</td>

		<td class="mainRight">

<?php
require_once 'login.php';


echo <<<HERE

		<form method="POST" action="updateWorkertest.php">
		<table border="0">
		<tr>
			<td>
				�������<br><br>
				���<br><br>
				��������<br><br>
				����� �������<br><br>
			</td>
			<td>
				<input type="text"   name="surname"><br><br>
				<input type="text" 	 name="name"> <br><br>
				<input type="text"   name="secondname"> <br><br>
				<input type="text"   name="rsu"> <br><br>
			</td>

		</tr>
		<tr>
			<td>
			 <td>
				<input type="submit" value="�������� ���������">
				<a href="allWorkers.php">��������� � ���������� ����</a>

			 </td>
			</td>
		</tr>
		</table>
		</form>

HERE;

if ( (!isset($_POST['surname'])) ||
	 (!isset($_POST['name'])) ||
	 (!isset($_POST['secondname'])) ||
	 (!isset($_POST['rsu'])))
	{
		echo "<p class=\"red\">��������� ��� ����!</body>";
	}

else
	{
		$surname = $_POST['surname'];
		$name 	 = $_POST['name'];
		$secondname 	 = $_POST['secondname'];
		$rsu 	 = $_POST['rsu'];

		$query = "INSERT INTO `workers` (surname, name, secondname, rsu) VALUES ('$surname', '$name', '$secondname', '$rsu')";
		$result = mysql_query($query) or die ("���������� ��������� ������ : ".mysql_error());
echo <<<HER
		<pre>
		<p class="green">������������ <b>$surname $name $secondname</b> ������� ��������.</p>

		<a href="allWorkers.php">����������</a>
		</pre>
HER;
	}


?>
			</center>
		</td>
</table>

	</body>

</html>


	</body>

</html>