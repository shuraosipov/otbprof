<html>
	<head>
		<title>��������� ���������</title>

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
<h5 align="center">��������� �������������</h5>
<?php
require_once 'login.php';
if (!isset($_POST['id_prof']))
{	echo "<p class=\"red\">�� ������ �������� ��� �������������� </p>";
	echo "<a href=\"Professions.php\">���������� ����</a>";}
else
{

// �������� �������� �� ������� test, �������� �������� ����������� �������� � radio-button.
$id_prof = $_POST['id_prof'];
$sql = "SELECT * FROM profession WHERE id='$id_prof'";
$result = mysql_query($sql);

while ($q = mysql_fetch_array($result))
{
// ������� ����, � ������� ������������ �������� �������������
echo <<<EDIT
<form method="POST" action="updateProfession.php">
		<table border="0">
		<tr>
			<td>
				�������������<br><br>

			</td>
			<td>
				<input type="hidden" name="id" value=$q[0]>
				<input type="text"   name="title" value=$q[1]><br><br>
			</td>

		</tr>
		<tr>
			<td>
			 <td>
				<input type="submit" value="����������� ���������">
				<br />
				<br />
				<a href="Professions.php">��������� � ���������� ����</a>

			 </td>
			</td>
		</tr>
		</table>
		</form>

EDIT;



}

}

?>

</body>

</html>





