<?php
$con = mysql_connect("explodecomputer.com","gib","Odeadfsws123qwe");
if (!$con)
{
	die('Could not connect to server: ' . mysql_error());
}
if(!mysql_select_db("explodecomputer", $con))
{
	die('Could not connect to database: '.mysql_error());
}
?>
