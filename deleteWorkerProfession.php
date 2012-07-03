<html>
	<head>
	  <title>Удаление специальности</title>
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

<?php
	require_once 'login.php';
   	$id_profession = $_POST['id_profession'];
   	$sql_query = "DELETE FROM workers_prof WHERE id='$id_profession'";
   	if ($result = mysql_query($sql_query))
   	{   	   echo "Специальность удалена.";
   	}

   	else
   	{   		die ("Невозможно выполнить запрос :  ".mysql_error());
   	}

echo "<br /><br /><a href=\"allWorkers.php\">Продолжить</a>";
?>

</td>

     </tr>

</table>
</body>
</html>