<?php


$db = mysqli_connect('localhost','root','','deneme');

if(isset($_POST['award_name']))
{
$award_name = $_POST['award_name'];
$award_type = $_POST['award_type'];
$awardid = $_POST['awardid'];
$filmid = $_POST['filmid'];



$sql_statement = "INSERT INTO film_wins_awards(NAME,TYPE,FILMID,AWARDID)
			VALUES ('$award_name','$award_type', '$filmid', '$awardid')" ;

$result = mysqli_query($db,$sql_statement);

echo "Result is ". $result;


header("Location: http://localhost/myrecit/");
}


else
{
	echo "Please enter the correct inputs";
}



?>