<?php

$db = mysqli_connect('localhost','root','','deneme');

if(isset($_POST['filmid']))
{
$money_earned = $_POST['money_earned'];
$age = $_POST['age'];
$money_spent = $_POST['money_spent'];
$filmid = $_POST['filmid'];


$sql_statement = "INSERT INTO money_supplies(MONEY_MADE,MONEY_SPENT,FILMID)
			VALUES ('$money_earned','$money_spent','$filmid')" ;

$result = mysqli_query($db,$sql_statement);

echo "Result is ". $result;


header("Location: http://localhost/myrecit/");
}


else
{
	echo "Please enter the correct inputs";
}

?>