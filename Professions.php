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
<h5 class="title"> ������ �������������� </h5>
<?php
require_once 'login.php';

//�������� �������
$query = "SELECT * FROM `profession`";
$result = mysql_query($query) or die  ("���������� ��������� ������".mysql_error());



echo <<<DOC
<form method="POST" action="addProfession.php" name="frmadd">
<input type="submit" value="��������">
</form>
DOC;



echo <<<HERE
<table class="spisok" align="center" border="1" width="100%">
<tr class="first">

     <td class="spisok">� �/�</td>
	 <td class="spisok" colspan="3">�������������</td>

</tr>
HERE;



while ($q = mysql_fetch_array($result))
	        {
			$id_prof = $q['id'];
echo <<<HERE
		<tr class="hvr">

			<td class="spisok">$q[0]</td>
			<td class="spisok">$q[1]</td>


</form>

<td class="spisok" align="center" width="35px">
<form method="POST" action="editProfession.php">
<input type="hidden" name="id_prof" value=$id_prof>
<input type="image" name="submit" src="images/edit.ico" value=$id_prof>
</form>
</td>

<td class="spisok" align="center" width="35px">
<form method="POST" action="deleteProfession.php" onsubmit="if(!confirm('��������!��� ������ ����� ��������� ��������! �������?')){return false}">
<input type="hidden" name="id_prof" value=$id_prof>
<input type="image" name="submit" src="images/delete.ico" value=$id_prof>
</form>
</td>





		</tr>
HERE;


			}




?>


			</td>

     </tr>

</table>
</body>
</html>