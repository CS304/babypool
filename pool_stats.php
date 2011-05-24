<?php

include("mysql_creds.php");

mysql_connect('127.0.0.1',$username,$password) or die( mysql_error());
@mysql_select_db($database) or die( "Unable to select database: " . mysql_error());

# Get the name of the person who's pool we are looking at
$result = mysql_query("SELECT creators.name FROM Creators JOIN pools ON facebook_id=pools.creator_facebook_id WHERE pools.id=".$pID);
$row = mysql_fetch_array($result);
$username = $row['name'];

# Get the names/results of all guesses on this pool
$result = mysql_query("SELECT * FROM guesses JOIN friends ON guesses.friend_facebook_id=friends.friend_facebook_id WHERE guesses.pool_id=".$pID);
$row = mysql_fetch_array($result);

mysql_close();

?>

