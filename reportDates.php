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

<h5 class="title"> �������� ���� ��� ������������ ������ </h5>
<?php
echo "<center>";
require_once 'login.php';
echo "<form method=\"POST\" action=\"vivodDATES.php\">";
include 'days.php';

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type=\"submit\" name=\"vivod\" value=\"������������ �����\">
	</form>";
echo "<center>";



?>

</td>

     </tr>

</table>
</body>
</html>