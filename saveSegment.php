<html>
<head>
<title>���������� ��������� � ����</title>
<link rel="stylesheet" href="style/main_style.css" type="text/css">
</head>
<body>
<?php
$host = "localhost";
$user = "root";
$password = "12345";
$database = "otbprof";

// ���������� � ����� ������
$connect = @mysql_connect($host, $user, $password);
if (!$connect) echo mysql_error();
@mysql_select_db($database);


// ������ �� ������� ���������� �� ������� workers


$id_worker = $_GET['editworker']; ## ������� ����� radiobutton ������ 

if ($id_worker) 

{

	$sql_query = "SELECT * FROM `workers` WHERE id=$id_worker";
	$result = @mysql_query($sql_query);

	for ($c = 0; $c < @mysql_num_rows($result); $c++)
	{
		$q = @mysql_fetch_array($result);
		echo 
	"<tr>
		<td></td>
		<td>".$q['id']."</td>
		<td>".$q['surname']."</td>
		<td>".$q['name']."</td>
		<td>".$q['secondname']."</td>
		<td>".$q['rsu']."</td>";
	}
}
else
{
echo "�������� ������������ ��� ��������������";
}

?>


</body>
</html>