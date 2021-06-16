<?php

$dbhost = "localhost";
$dbname = "youtubeuserdata";
$dbuser = "root";
$dbpass = "";
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$con) 
{
	echo "NOT connected";
}

else 
{
	echo "Connected";
}
?> 