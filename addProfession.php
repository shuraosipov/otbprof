<html>
	<head>
	  <title>���������� �������������</title>
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
<h5 align="center"> ���������� ����� ������������� � ���� ������ </h5>
<?php
include 'login.php';

echo <<<ADDPROF
	<table align="center" border="0">
	<form method="POST" action="addProfession.php" onsubmit="if(!this.title.value){alert('�� �� ����� ���������!');return false}">
	        <tr>
				<td>
				</td>
			</tr>

			<tr>
				<td>
					������������:
				</td>

				<td>
					<input type="text" name="title">
				</td>
           </tr>
           <tr>
				<td>
					<td>
					 <input type="submit" value="��������">
					 </td>
				</td>
		</tr>
	</table>

ADDPROF;

if (!isset($_POST['title']))
	{		echo "<p class=\"red\">��������� ��� ����!</p>";
	}
else
{
$title = $_POST['title'];

$query = "INSERT INTO `profession` (titleprof) VALUES('$title')";
$result = mysql_query($query) or die ("���������� ��������� ������ : ".mysql_error());

echo "<p class=\"green\"> ������ <b>$title</b> ������� ��������� � ������ ��������� </p> ";
}

echo <<<HERE
<br />
<a href="Professions.php">���������� ����</a>

HERE;

?>

</body>

</html>