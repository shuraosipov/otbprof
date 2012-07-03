<!--Получаем список всех сотрудников-->
<!--allWorkers.php-->
<html>
	<head>
		<title>Список сотрудников</title>
	        <link rel="stylesheet" href="style/main_style.css" type="text/css">
	        <link rel="shortcut icon" href="images/main.ico" type="text/x-ico">
	</head>
	<body>

<h1 class="main" align="center">Прохождение профессионального обучения</h1>

<table class="main">
	<tr>
 		<td class="mainLeft">
        	<?php require 'leftside.php';?>
		</td>

 		<td class="mainRight">
<h5 class="title">Список сотрудников</h5>
<?php

// Подключение к MySQL и базе
require_once 'login.php';



// Запрос на выборку всех записей из таблицы workers
$sql_query = "SELECT * FROM `workers`";
$result = mysql_query($sql_query) or die ("Неверный запрос : ".mysql_error);

// кнопка "Просмотреть"

//  кпопка "Добавить"
echo <<<ADD
	<form 	method="POST" action="addWorkers.php">
		<input 	type="submit" value="Добавить cотрудника">
	</form>
ADD;

// Печать заголовка таблицы
$print_table = <<<HERE
<table class="spisok" align="center" border="1" width="100%">
<tr class="first">

     <td class="spisok">№ п/п</td>
	 <td class="spisok">Фамилия</td>
	 <td class="spisok">Имя</td>
	 <td class="spisok">Отчество</td>
	 <td class="spisok" colspan="4">Участок</td>

</tr>
HERE;
echo $print_table;

//  Печать всех сотрудников в таблицу
	while ($q = mysql_fetch_array($result))


	{
		$id_index = $q['id'];
		$id_w = $id_index;

//  Печать всех столбцов таблицы
echo <<<PRINT
	<tr class="hvr">

		<td class="spisok">$q[0]</td>
		<td class="spisok">$q[1]</td>
		<td class="spisok">$q[2]</td>
		<td class="spisok">$q[3]</td>
		<td class="spisok">$q[4]</td>
PRINT;

//	Создание радио кнопок к конце каждой строки
/*<td align="center">
			<input  type="radio"
					name="editworker"
					value=$id_index>
		</td>    */
echo <<<HERE
<td class="spisok" class="hvr" align="center" width="35px" valign="bottom">
<form method="POST" action="editSegment.php">
      	<input type="hidden" name="id_index" value=$id_index>
	   	<input type="image" src="images/edit.ico"  name="submit" title="Изменение и добавление данных профиля">
</form>
      </td>


<td class="spisok" class="hvr" align="center" width="35px">
<form method="POST" action="viewWorker.php">
      	<input type="hidden" name="id_w" value=$id_w>
	   	<input type="image" src="images/view.ico"  name="submit" title="Просмотр профиля сотрудника">
</form>
      </td>


<td class="spisok" class="hvr" align="center" width="35px">
<form method="POST" action="deleteWorker.php" onsubmit="if(!confirm('Внимание!Все данные будут полностью потеряны! Удалить?')){return false}">
      	<input type="hidden" name="id_w" value=$id_w>
	   	<input type="image" src="images/delete.ico"  name="submit" title="Удаление профиля сотрудника">
</form>
      </td>
    </tr>





HERE;

}





?>

		</td>


</table>
</body>
</html>