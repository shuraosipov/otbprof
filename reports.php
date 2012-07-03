<html>
	<head>
	  <title>Отчеты</title>
	</head>
	    <link rel="stylesheet" href="style/main_style.css" type="text/css">
		<link rel="shortcut icon" href="images/main.ico" type="text/x-ico">
	<body>
<h1 class="main" align="center">Прохождение профессионального обучения</h1>

<table class="main">
	<tr>
       	<td class="mainLeft">
 			<?php include 'leftside.php';?>
    	</td>

		<td class="mainRight">

<h5 class="title">Выберите вид отчета для формирования</h5>
<?php

echo "<div>";
echo "<a href=\"ReportProfession.php\"> Отчеты по специальностям</a><br /><br />";

echo "<a href=\"ReportRsu.php\"> Отчеты по участкам</a><br /><br />";

echo "<a href=\"ReportDates.php\"> Отчеты по датам</a><br /><br />";
echo "</div>";

?>

</td>

     </tr>

</table>
</body>
</html>