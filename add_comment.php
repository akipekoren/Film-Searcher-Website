<?php


include 'functions.php';

$db = mysqli_connect('localhost','root','','deneme');

session_start();

$filmid = $_POST['com'];

$my_sql = "SELECT * FROM MOVIES WHERE MOVIEID = '$filmid'";

$result = mysqli_query($db,$my_sql);

$row = mysqli_fetch_assoc($result);


$movie_name = $row["MOVIETITLE"];
$movie_year = $row["YEAR"];
$movie_director = $row["DIRECTORNAME"];

?>



<!DOCTYPE html>
<html>
<style>
	
	body {
  background-image: url('b_2.png');
   background-repeat: no-repeat;
   background-attachment: fixed; 
  background-size: cover;
}

.header {
  position: absolute; 
  left: 41%;
  top: 6%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%); 
  font-size: 25px;
  width: 500px;
  height: 100px;
  color: #6433FF
}


.logo_button {
  position: absolute;
  left: 1.5%;
  top: -1.5%;
  width: 95px;
  height: 100px;

  background-color:#3390FF;

} 

.main {
  position: absolute; 
  left: 1%;
  top: 0%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%); 

  width: 300px;
  height: 100px;
}

.menu {
  position: absolute;	
  left: 5%;
  top: 40%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%); 

  width: 200px;
  height: 100px;
}

.Comment{

	  position: absolute;	
  left: 10%;
  top: 20%;
}

.button {
  border: 2px ;
  color: black;
  padding: 5px 15px;
  text-align: center;	
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 5px;
  cursor: pointer;
}


.button5 {
  position: absolute;
  left: 88%;
  top: 4%;
width: 175px;} 


.button7 {
  position: absolute;

width: 125px;} 

.user_name_place{

  position: absolute;
  left: 81%;
  top: 7%;
}


.sub_but
{
   position: absolute;
  left: 60%;
  top: 100%;
}


</style>
<head>
	<title></title>
</head>
<body>

<div class="header">

<h1> <i> FILM SEARCHER </i> </h1>

</div>

<div class="main" style="width:3000px;height:200px;border:3px solid #000;">

</div>
  <form action="index.php" method="POST">
<button class="button logo_button"><i>FS</i></button>
</form>

<form action="logout.php" method="POST">
<button class="button button5" >Log Out</button>

<div class ="user_name_place">

<?php

$name = "Hello" . " " . $_SESSION['username'];

$link = "http://localhost/myrecit/profile.php";
echo "<a href='"."$link"."'> $name</a>";
?>

</div>

</form>
<div class= "Comment">
<form method="POST" action="comment_db.php">

	<p> Thank you for sharing your comment to <p style="color:#FF0000";><?php echo $movie_name. " - " . $movie_year ?> </p>
	
	Which is directed by  <p style="color:#FF0000";><?php echo $movie_director ?> </p> 

	

	<p>
    <textarea name="comment" id="comment"  rows="10" cols="50"> </textarea>

<div class= "sub_but">

<button type="submit" name="add_com" class="button button7" value="<?= $filmid ?>" > Submit Comment</button>
</div>

</form>
</div>
</body>
</html>

