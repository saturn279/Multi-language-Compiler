<?php

 //This script is designed by Android-Examples.com
//Define your host here.
$hostname = "localhost";

//Define your database username here.
$username = "root";

//Define your database password here.
$password = "";

//Define your database name here.
$dbname = "test";

 $conn = mysql_connect($hostname, $username, $password);
 
 if (!$conn)
 
 {
 
 die('Could not connect: ' . mysql_error());
 
 }
 
 mysql_select_db($dbname, $conn);

 //This script is designed by Android-Examples.com

?> 
 
 
 