<?php

/**
 * Initialization DB connection.
 */


$dblocation = "127.0.0.1";
$dbname = "myshop";
$dbuser = "root";
$dbpasswd = "7UDwF8,G";

//connecting to DB
global $db;	
$db = mysqli_connect($dblocation, $dbuser, $dbpasswd);

if (! $db){
	echo "Not able to connect to MySql";
	exit();
}

if(! mysqli_select_db($db, $dbname)){
	echo "Access to DB is denied: ($dbname)";
}

