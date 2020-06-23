<?php

$db = mysqli_connect('localhost','root','','deneme');

if(isset($_POST['title']))
{

$title = $_POST['title'];
$country = $_POST['country'];
$language = $_POST['language'];

//$screen_writer = $_POST['screen_writer'];
$year = $_POST['year'];
//$duration = $_POST['duration'];

$director = $_POST['director'];
$genre = $_POST['genre'];
$rating = $_POST['rating'];


$sql_statement = "INSERT INTO film(LANGUAGE,YEAR,GENRE,RATING,COUNTRY,TITLE,DIRECTOR)
			VALUES ('$language','$year','$genre','$rating', '$country','$title', '$director')" ;

$result = mysqli_query($db,$sql_statement);

echo "Result is in insert and ". $result;

header("Location: http://localhost/myrecit/");



}

else
{
	echo "Please enter the correct inputs";
}

?>