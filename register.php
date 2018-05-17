<?php


define('DB_HOST', 'localhost');
define('DB_NAME', 'kyewellimidde');
define('DB_USER','root');
define('DB_PASSWORD','');


$field1_name=$_POST['email'];
$field2_name=$_POST['pass'];
$field3_name=$_POST['name'];
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD)or die("Failed to connect to MySQL: " . mysql_error());
@mysql_select_db(DB_NAME,$con) or die( "Unable to select database");
$query = "INSERT INTO login VALUES('$field1_name','$field2_name',
'$field3_name')";mysql_query($query);mysql_close();?>