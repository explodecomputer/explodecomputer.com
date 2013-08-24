<?php
$con = mysql_connect("gibranhemani.com","root","Thereisnospoon1");
if (!$con)
{
	die('Could not connect to server: ' . mysql_error());
}
if(!mysql_select_db("explodecomputer", $con))
{
	die('Could not connect to database: '.mysql_error());
}
?>