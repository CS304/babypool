<html>
<h1>hello world</h1>
</html>
<?php
$dbname = 'babypool';

if (!mysql_connect('localhost', 'root', '')) {
      echo 'Could not connect to mysql';
          exit;
}
echo $dbname;

mysql_close();
?>
