<html>
	<head>
	  <title>�������� ���������</title>
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
<h5 class="title">���������� ��������� � ���� ������</h5>
<?php
require_once 'login.php';

$id = $_POST['document'];


echo "

		<form method=\"POST\" action=\"updateDocument.php\" onsubmit=\"if((!this.titledoc.value) || (!this.typedoc.value))
															{alert('�� ����� �� ��� ������!');return false}\">
		<table align=\"center\" border=\"0\">
		<tr>
			<td valign=\"top\">
				������������� : <br /><br />
				�������� ��������� : <br><br>
				��� ��������� : <br><br>
				��������� �������� : <br><br>
				���� �������� ��������� : <br /><br />
            </td>

			<td valign=\"top\">";
$select_prof = "SELECT * FROM `workers_prof` WHERE linkkey = '$id'";
$result_prof = mysql_query($select_prof) or die ("���������� ��������� ������ : ".mysql_error);

// ����������� ��������� ������� � ���������� ����
echo "<select class=\"main\" name=\"profession\">";
while ($q = mysql_fetch_array($result_prof))

{
	echo"	<option value=$q[0]>$q[2]</option>";
}


echo " </select><br><br>";

echo "

				<input type=\"text\"   name=\"titledoc\" size=\"50\"><br><br>
				<input type=\"text\"   name=\"typedoc\" size=\"50\"> <br><br>";
				include 'days.php';
echo "          <br /><br />
				<input type=\"radio\" name=\"dateo\" value=\"+1 year\" checked>���
				<input type=\"radio\" name=\"dateo\" value=\"+2 year\">���
				<input type=\"radio\" name=\"dateo\" value=\"+3 year\">���
				<input type=\"radio\" name=\"dateo\" value=\"+4 year\">������
				<input type=\"radio\" name=\"dateo\" value=\"+5 year\">����";






echo "		</td>

		</tr>
		<tr align=\"center\">
			<td colspan=\"100%\">

				<input type=\"submit\" value=\"������� ��������\">

			</td>
		</tr>
		</table>
		</form>";

?>

		</td>


</table>
</body>
</html>