<?php

$db = mysqli_connect('localhost','root','','deneme');

if(isset($_POST['actor_name']))
{
$actor_name = $_POST['actor_name'];
$age = $_POST['age'];
$active_since = $_POST['active_since'];
$filmid = $_POST['filmid'];


$sql_statement = "INSERT INTO actors(ACTIVE_SINCE,ACTOR_NAME, AGE,FILMID)
			VALUES ('$active_since','$actor_name','$age','$filmid')" ;

$result = mysqli_query($db,$sql_statement);

echo "Result is ". $result;


header("Location: http://localhost/myrecit/");
}


else
{
	echo "Please enter the correct inputs";
}

?>