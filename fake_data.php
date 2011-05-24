<?php

include("mysql_creds.php");

$con = mysql_connect("127.0.0.1",$username,$password);
if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }

mysql_select_db("babypool", $con);

mysql_query("INSERT INTO Friends VALUES( '123', '5555','Johnson')");
mysql_query("INSERT INTO Friends VALUES( '234', '5555','Buchemi Steve')");
mysql_query("INSERT INTO Friends VALUES( '345', '5555','Button')");
mysql_query("INSERT INTO Friends VALUES( '456', '6969','Smith')");
mysql_query("INSERT INTO Friends VALUES( '567', '6969','Roll')");
mysql_query("INSERT INTO Friends VALUES( '678', '6969','Pumpkineater')");
mysql_query("INSERT INTO Friends VALUES( '789', '24521031','isSoFat')");
mysql_query("INSERT INTO Friends VALUES( '900', '24521031','Boob')");
mysql_query("INSERT INTO Friends VALUES( '890', '24521031','Couldhow')");
mysql_query("INSERT INTO Friends VALUES( '901', '24521031','fromFriends')");

mysql_close($con);
?>
