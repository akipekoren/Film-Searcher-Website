<?php

$db = mysqli_connect('localhost','root','','deneme');

if(isset($_POST['name']))
{
$name = $_POST['name'];
$net_worth = $_POST['net_worth'];
$active_since = $_POST['active_since'];
$filmid = $_POST['filmid'];


$sql_statement = "INSERT INTO producer(ACTIVE_SINCE,NAME, NET_WORTH,FILMID)
			VALUES ('$active_since','$name','$net_worth','$filmid')" ;

$result = mysqli_query($db,$sql_statement);



header("Location: http://localhost/myrecit/");

}

else
{
	echo "Please enter the correct inputs";
}

?>