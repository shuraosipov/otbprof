<html>
	<head>
	  <title>������</title>
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

<h5 class="title"> �������� ����� ������� ��� ������������ ������ </h5>
<?php
require_once 'login.php';
echo "<center>";
// ������ �� ������� �������� � ����� �� � ������
echo "<form method=\"POST\" action=\"vivodRSU.php\">";

$sql_rsu = "SELECT * FROM `rsu`";
$result = mysql_query($sql_rsu) or die ("���������� ��������� ������".mysql_error);

echo "�������� ����� ������� : <select name=\"rsu\">";
while ($q = mysql_fetch_array($result))
	{		echo "<option value=$q[0]>$q[1]</option>";	}
echo "</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<input type=\"submit\" name=\"vivod\" value=\"������������ �����\">
		</form>";
echo "</center>";



?>

</td>

     </tr>

</table>
</body>
</html>