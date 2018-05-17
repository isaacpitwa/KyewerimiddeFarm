<?php


define('DB_HOST', 'localhost');
define('DB_NAME', 'kyewellimidde');
define('DB_USER','root');
define('DB_PASSWORD','');
$field1_name=$_POST['bird'];
$field2_name=$_POST['feed'];
$field3_name=$_POST['quantity'];
$field4_name=$_POST['comment'];
$field5_name=date('Y-m-d');
$field6_name=7;
echo($field1_name);
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD)or die("Failed to connect to MySQL: " . mysql_error());
@mysql_select_db(DB_NAME,$con) or die( "Unable to select database");
$query = "INSERT INTO feeding VALUES('$field1_name','$field2_name',
'$field3_name','$field4_name','$field5_name','$field6_name')";mysql_query($query);mysql_close();?>