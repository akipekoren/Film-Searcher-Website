<?php

session_start();

$db = mysqli_connect('localhost','root','','deneme');


$sql_statement = "SELECT FILM.FILMID, FILM.TITLE,FILM.GENRE,FILM.RATING,FILM.LANGUAGE,FILM.DIRECTOR,FILM.COUNTRY, FILM.YEAR, MONEY_SUPPLIES.MONEY_MADE,FILM_WINS_AWARDS.NAME FROM FILM INNER JOIN MONEY_SUPPLIES INNER JOIN FILM_WINS_AWARDS WHERE FILM.FILMID = MONEY_SUPPLIES.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID" ;


$id = $_SESSION['id'];





$result = mysqli_query($db,$sql_statement);



while($row = mysqli_fetch_assoc($result))
  {
 
    $title = $row['TITLE']; 	
    $rating = $row['RATING'];
    $filmid = $row['FILMID'];

    
	$sql_user_statement = "SELECT USER_FILM.FILMID FROM USER_FILM WHERE USER_FILM.FILMID = '$filmid' " ;
	$result_user = mysqli_query($db,$sql_user_statement);	
	$count=$result_user->num_rows;

	if ($count > 0)
	{

		echo $row['TITLE'];

	}






}

?>