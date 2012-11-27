<?php
$hostname = '127.0.0.1';
$username = 'root';
$password = 'aiaabowali';

$db_name = 'synapse';

mysql_connect($hostname, $username, $password) or DIE('Something went wrong while connecting to mysql server');
mysql_select_db($db_name) or DIE('Couldn\'t connect to the database');
?>
