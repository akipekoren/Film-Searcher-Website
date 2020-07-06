<?php


session_start();

 $db = mysqli_connect('localhost','root','','deneme');

$id = $_SESSION['id'];


if(!empty($_POST['check_list'])) {


	$array = array();

    foreach($_POST['check_list'] as $check) {
    	$array[] = $check;
          
    	}

    foreach ($array as $key) {


$sql_statement = "INSERT INTO USER_MOVIE (USERID, MOVIEID)
			VALUES ('$id','$key')" ;

$result = mysqli_query($db,$sql_statement);

    	//echo $id;
    }
    }


header("Location: http://localhost/myrecit/index.php");


?>