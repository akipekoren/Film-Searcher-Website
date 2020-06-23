<?php

$db = mysqli_connect('localhost','root','','deneme');

if($db->maxdb_connect_errno > 0)
{
	die('Unable to connect to database [' . $db->maxdb_connect_error . ']');
}



?>