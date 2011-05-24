<?php

include("mysql_creds.php");

$facebookID=$_POST['facebookID'];
$name=$_POST['name'];
$parent=$_POST['parent'];
$date=$_POST['date1'];
$email=$_POST['email'];

$create_date=date("Y-m-d");

mysql_connect('127.0.0.1',$username,$password) or die( mysql_error());
@mysql_select_db($database) or die( "Unable to select database: " . mysql_error());

$create_query = "INSERT INTO Creators VALUES ('$facebookID','$name', '$email', '$parent', '$date')";
mysql_query($create_query);
$pool_create_query = "INSERT INTO Pools VALUES ('','$create_date', '$facebookID')";
mysql_query($pool_create_query);
mysql_close();

?>

