&ldquo;
<?php
	require_once 'login.php';
   	$id_prof = $_POST['id_prof'];
   	$sql_query = "DELETE FROM `profession` WHERE id='$id_prof'";
   	if ($result = mysql_query($sql_query))
   	{
   	   echo "������������� �������.";
   	}

   	else
   	{
   		die ("���������� ��������� ������ :  ".mysql_error());
   	}

echo "<br /><br /><a href=\"Professions.php\">����������</a>";
?>

</td>

     </tr>

</table>
</body>
</html>