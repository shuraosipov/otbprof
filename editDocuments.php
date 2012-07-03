<html>
	<head>
		<title>Список документов</title>

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
<h5 class="title">Изменение в документах</h5>
<?php
require_once 'login.php';

if (!isset($_POST['editdocument']))
	{echo <<<HERE
	<p class="red">Не выбран документ для редактирования</p>
	<a href="documents.php">В предыдущее меню</a>
HERE;	}
else
{
$id_doc = $_POST['editdocument'];
$sql = "SELECT * FROM `documents` WHERE id='$id_doc'";
$result = mysql_query($sql);

while ($q = mysql_fetch_array($result))
{echo <<<HER
		<form method="POST" action="updateDocument.php">
		<table border="0">
		<tr>
			<td valign="top">
				Название документа<br><br>
				Тип документа<br><br>
				Последнее обучение<br><br>
				Следующее обучение<br><br>
			</td>
			<td>
				<input type="hidden" name="id"       value=$q[0]>
                <input type="text"   name="titledoc" value=$q[1]><br><br>
				<input type="text" 	 name="typedoc"  value=$q[2]> <br><br>
				<input type="text"   name="datep"    value=$q[3]> <br><br>
				<input type="text"   name="dateo"    value=$q[4]> <br><br>

			</td>

		</tr>
		<tr>
			<td>
			 <td>
				<input type="submit" value="Подтвердить изменения">
				<br />
				<br />
				<a href="documents.php">Вернуться в предыдущее меню</a>

			 </td>
			</td>
		</tr>
		</table>
		</form>
HER;
	}
}
echo <<<HERE
<div align="right">
		<form method="POST" action="deleteDocument.php">
				<input  type="hidden"
						name="id"
						value=$id_doc>

				<input  type="submit"
						value="Удалить документ">
		</form>
</div>
HERE;
?>
			</td>
		</tr>


</table>

</body>

</html>