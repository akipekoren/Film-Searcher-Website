<?php


$db = mysqli_connect('localhost','root','','deneme');



if(isset($_POST['search_button']) )

{

	$search_1 = $_POST['search_genre'];
	$search_2 = $_POST['search_lang'];
	$search_3 = $_POST['search_director'];
	$search_4 = $_POST['search_year'];
	$search_5 = $_POST['search_rating'];	
	$search_6 = $_POST['search_name'];

	if ($search_2 === "Language of Movie")
		$search_2 = "";

	if ($search_1 === "Genre of Movie")
		$search_1 ="";



	$arr = array();

	array_push($arr,$search_1,$search_2,$search_3,$search_4,$search_5,$search_6);

 
 	$query_arr = array();

	$filt_1 = " MOVIES.GENRES LIKE '%{$search_1}%' ";
	$filt_2 = " MOVIES.LANG = '$search_2' ";
	$filt_3 = " MOVIES.DIRECTORNAME LIKE  '%{$search_3}%' ";
	$filt_4 = " MOVIES.YEAR LIKE  '%{$search_4}%' ";
	$filt_5 = " MOVIES.RATING >= '$search_5' ";
	$filt_6 = " MOVIES.MOVIETITLE LIKE  '%{$search_6}%' ";

	array_push($query_arr, $filt_1 , $filt_2 , $filt_3 , $filt_4 ,$filt_5 , $filt_6);

	$main_sql = "SELECT * FROM MOVIES WHERE";
	$counter = 0;


	for ($i = 0 ; $i < count($arr) ; $i++)
	{


	if (!empty($arr[$i]) && $counter === 0 )
	{
		$main_sql = $main_sql .$query_arr[$i];
		$counter++;
	}
	else if (!empty($arr[$i]) && $counter !==0)
	{

		$main_sql = $main_sql . "AND" . $query_arr[$i];

	}


	}


	$result = mysqli_query($db,$main_sql);


	echo $main_sql;


	while($row = mysqli_fetch_assoc($result))
  { 


  	echo $row["MOVIETITLE"];

	}







}






	//$sql = "SELECT * FROM MOVIES WHERE MOVIES.GENRES LIKE '%{$search_1}%' AND MOVIES.MOVIETITLE LIKE  '%{$search_6}%'  AND MOVIES.DIRECTORNAME LIKE  '%{$search_3}%' AND MOVIES.LANG = '$search_2' AND FILM.RATING >= '$search_5' " ;



 




?>

