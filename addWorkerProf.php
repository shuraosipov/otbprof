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
<h5 align="center"> ���������� ����� ������������� ��� ���������� </h5>
<?php
include 'login.php';

$id = $_POST['profession'];

echo <<<ADDPROF
	<table align="center" border="0">
	<form method="POST" action="updateWorkerProf.php">
	        <tr>
				<td>
				</td>
			</tr>

			<tr>
				<td>
					������������:
				</td>
				<td>
ADDPROF;


$sql = "SELECT * FROM `profession`";
$result = mysql_query($sql) or die ("���������� ��������� ������ : ".mysql_error());
echo "<select name=\"titleprof\">";
while ($q = mysql_fetch_array($result))
{	echo "<option value=\"$q[1]\">$q[1]</option>";
}
echo "</select>";


echo <<<ADDPROF
					<input type="hidden" name="id_worker" value=$id>
				</td>
           </tr>
           <tr>
				<td>
					<td>
					 <input type="submit" value="�������� �������������">
					 </td>
				</td>
		</tr>
	</table>

ADDPROF;


?>

</body>

</html>