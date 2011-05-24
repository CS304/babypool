<?php
require("./mysql_creds.php");

mysql_connect(localhost,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");
$result = mysql_query("SELECT * FROM contacts");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
}

echo $result;

mysql_close();
?>
