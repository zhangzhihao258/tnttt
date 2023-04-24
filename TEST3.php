<?php

include 'TEST2.php';
mysql_set_charset('utf8' , $conn);
$id = $_GET['id'];
mysql_query("DELETE FROM study WHERE id = {$id}",$conn) or die("删除数据失败".mysql_error());
header("Location:TEST1.php");
?>