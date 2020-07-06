<?php

$db = mysqli_connect('localhost','root','','deneme');

$csv_file = $_POST['csv_file'];

if (file_exists($csv_file))
{

$fh = fopen($csv_file, 'r');


while ($data = fgetcsv ($fh)){


	$item1 = mysqli_real_escape_string($db, $data[1]);  
	$item2 = mysqli_real_escape_string($db, $data[2]);
	$item3 = mysqli_real_escape_string($db, $data[3]);  
	$item4 = mysqli_real_escape_string($db, $data[4]);
	$item5 = mysqli_real_escape_string($db, $data[5]);  
	$item6 = mysqli_real_escape_string($db, $data[6]);
	$item7 = mysqli_real_escape_string($db, $data[7]);  
	$item8 = mysqli_real_escape_string($db, $data[8]);
	$item9 = mysqli_real_escape_string($db, $data[9]);  
	$item10 = mysqli_real_escape_string($db, $data[10]);
	$item11 = mysqli_real_escape_string($db, $data[11]);  
	$item12 = mysqli_real_escape_string($db, $data[12]);
	$item13 = mysqli_real_escape_string($db, $data[13]);  
	$item14 = mysqli_real_escape_string($db, $data[14]);
	$item15 = mysqli_real_escape_string($db, $data[15]);  
	$item16 = mysqli_real_escape_string($db, $data[16]);



          $query = "INSERT INTO MOVIES(MOVIETITLE,DIRECTORNAME,DURATION,GENRES,ACTOR_1,ACTOR_2,ACTOR_3,VOTES,FACELIKES,LINK,LANG,COUNTRY,BUDGET,YEAR,RATING,COLOR) VALUES('$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$item14','$item15','$item16')";

          $result = mysqli_query($db, $query);

 

}



}
else
{
echo "CSV file is not correct!";	
}



?>