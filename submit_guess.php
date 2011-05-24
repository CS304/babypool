<?php

include("mysql_creds.php");

$pID=$_POST['poolID'];
$facebookID=$_POST['facebookID'];
$birth_date=$_POST['birth_date'];
$baby_type=$_POST['baby'];
$weight=$_POST['weight'];



mysql_connect('127.0.0.1',$username,$password) or die( mysql_error());
@mysql_select_db($database) or die( "Unable to select database: " . mysql_error());

$query = "INSERT INTO Guesses VALUES ('','$pID','$facebookID','$birth_date', '$baby_type', '$weight')";
mysql_query($query) or die( mysql_error());
mysql_close();
?>

