<?php
require_once 'login.php';
// ���� ��� ����� ���
$select_day = "SELECT * FROM `days`";
$result_day = mysql_query($select_day) or die ("���������� ��������� ������ : ".mysql_error());
echo "���� : <select name=\"day\">";
while ($d = mysql_fetch_array($result_day))
{
	echo "<option value=$d[1]>$d[1]</option>";
}
echo "</select>";

// ���� ��� ����� ������
$select_month = "SELECT * FROM `months`";
$result_month = mysql_query($select_month) or die ("���������� ��������� ������ : ".mysql_error());
echo "����� : <select name=\"month\">";
while ($m = mysql_fetch_array($result_month))
{
	echo "<option value=$m[1]>$m[1]</option>";
}
echo "</select>";

// ���� ��� ����� ����
$select_year = "SELECT * FROM `years`";
$result_year = mysql_query($select_year) or die ("���������� ��������� ������ : ".mysql_error());
echo "��� : <select name=\"year\">";
while ($y = mysql_fetch_array($result_year))
{
	echo "<option value=$y[1]>$y[1]</option>";
}
echo "</select>";

?>
