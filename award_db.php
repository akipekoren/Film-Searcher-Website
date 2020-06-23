<?php


$db = mysqli_connect('localhost','root','','deneme');

if(isset($_POST['award_name']))
{
$award_name = $_POST['award_name'];
$award_type = $_POST['award_type'];



$sql_statement = "INSERT INTO award(NAME,TYPE)
			VALUES ('$award_name','$award_type')" ;

$result = mysqli_query($db,$sql_statement);

echo "Result is ". $result;


header("Location: http://localhost/myrecit/");
}


else
{
	echo "Please enter the correct inputs";
}



?>