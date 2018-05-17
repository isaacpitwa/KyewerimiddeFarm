<?php


define('DB_HOST', 'localhost');
define('DB_NAME', 'kyewellimidde');
define('DB_USER','root');
define('DB_PASSWORD','');
$field1_name=$_POST['category'];
$field2_name=$_POST['item'];
$field3_name=$_POST['count'];
$field4_name=$_POST['unitcost'];
$field5_name=$_POST['amount'];
$field6_name=$_POST['method'];
$field7_name=$_POST['status'];
$field8_name=$_POST['desc'];
$field9_name=date('Y-m-d');
$field10_name=6;
echo($field1_name);
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD)or die("Failed to connect to MySQL: " . mysql_error());
@mysql_select_db(DB_NAME,$con) or die( "Unable to select database");
$query = "INSERT INTO expense VALUES('$field1_name','$field2_name',
'$field3_name','$field4_name','$field5_name','$field6_name','$field7_name','$field8_name','$field9_name','$field10_name')";mysql_query($query);mysql_close();?>