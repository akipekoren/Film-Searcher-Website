

<?php


session_start();

?>

<!DOCTYPE html>
<html>

<style >

	body {
  background-image: url('b_2.png');
   background-repeat: no-repeat;
   background-attachment: fixed; 
  background-size: cover;
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


.user_name_place{

  position: absolute;
  left: 81%;
  top: 7%;
}


  

#div1
{

height:30px;
width: 700px;
padding: 0;
margin:0;


}


#main_list
{

position: absolute;
left:300px;
bottom: 570px;


}


#div2
{
position: absolute;
height:500px;       
width: 800px;
overflow: auto;
overflow-x: hidden;


}



.button5 {
  position: absolute;
  left: 88%;
  top: 4%;
width: 125px;} 


.button1 {
  position: absolute;
  left: 0%;
  top: 20%;
width: 210px;
height:50px;} 

.button2 {
  position: absolute;
  left: 0%;
  top: 29%;
width: 210px;
height:50px;} 

.button3 {
  position: absolute;
  left: 0%;
  top: 38%;
width: 210px;
height:50px;} 

.button4 {
  position: absolute;
  left: 0%;
  top: 47%;
width: 210px;
height:50px;

} 

.button6 {
  position: absolute;
  left: 0%;
  top: 56%;
width: 210px;
height:50px;

} 

.other {
  position: absolute;
  left: 50%;
  top: 57%;
width: 210px;
height:50px;

}


.RulesList
{
   position: absolute;
  left: 25%;
  top: 20%;
}


#table1
{

  text-align: center;
  font-family: Arail;
  font-size: 18px;
  width: 800px;
  color:white;
  height: 100%;
  table-layout: fixed

}

#table2
{

  text-align: center;
  font-family: Arail;
  font-size: 15px;
  width: 800px;
  color:black;
  height: 200px;
  table-layout: fixed


}


td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;

}

tr:nth-child(even) {
  background-color: #dddddd;
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

//echo "Hello" . " " . $_SESSION['username'];
$link = "http://localhost/myrecit/profile.php";
echo "<a href='"."$link"."'> $name</a>";
?>

</div>

</form>




<form method="POST">
 <button class= "button button1"  name = "Rules" >Rules</button>
</form>

<form method="POST">
 <button class= "button button2"  name = "myMovies" >My Movies</button>
</form>

<form method="POST">
 <button class= "button button3"  name = "myComments" >My Comments</button>
</form>


<form method="POST">
 <button class= "button button4"  name = "profSet" >Profile Settings</button>
</form>

<form method="POST" action="index.php">
 <button class= "button button6"  name = "profSet" >Add Movie to My list</button>
</form>




<?php

if(isset($_POST["myMovies"]) || (!isset($_POST["Rules"]) && !isset($_POST["myMovies"]) && !isset($_POST["myComments"]) && !isset($_POST["profSet"])))

{


	?>


<div id="main_list">

<div id="div1">
<table id=table1>

<tr>
 <th>TITLE</th>   
  <th>GENRE</th> 
   <th>RATING</th> 



   <th>  </th>



 </tr>

</div>
</table>

<div id="div2">
<table id ="table2">

	<?php

$db = mysqli_connect('localhost','root','','deneme');


//$sql_statement = "SELECT FILM.FILMID, FILM.TITLE,FILM.GENRE,FILM.RATING,FILM.LANGUAGE,FILM.DIRECTOR,FILM.COUNTRY, FILM.YEAR, MONEY_SUPPLIES.MONEY_MADE,FILM_WINS_AWARDS.NAME FROM FILM INNER JOIN MONEY_SUPPLIES INNER JOIN FILM_WINS_AWARDS WHERE FILM.FILMID = MONEY_SUPPLIES.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID" ;
$id = $_SESSION['id'];

$sql_statement = "SELECT * FROM USER_FILM INNER JOIN FILM WHERE USER_FILM.FILMID = FILM.FILMID AND USER_FILM.USERID = '$id' " ;

$result = mysqli_query($db,$sql_statement);


while($row = mysqli_fetch_assoc($result))
  {
 
    $title = $row['TITLE'];
    $rating = $row['RATING'];
    $genre = $row['GENRE'];
    $year = $row['YEAR'];
    $language = $row['LANGUAGE'];
    $country = $row['COUNTRY'];
    //$money_made = $row['MONEY_MADE'];
    //$awards = $row['NAME'];
    //$director = $row['DIRECTOR'];
    $filmid = $row['FILMID'];
    

  
  echo "<tr>" . "<th>" . $title . "</th>" ."<th>" . $genre . "</th>" . "<th>" . $rating .  "</th>";

  
  ?>

      <td><a href='delete_f_db.php?id=".$row["FILMID"]."' alt='edit'>See the details of the Movie</a></td>

  <?php

  }



}


else if (isset($_POST["Rules"]))
{

?>

<div class="RulesList">
<ul>
  <li>You can add any movies into your account in here to see the comments about the movie and to obtain further information about movie.</li>
  <br>
  <li>Please, use a proper language when you make comment on movie.</li>
  <br>
  <li>You can delete movies that you don't like.</li>
  <br>
  <li> Please be respectful to other users.</li>
  <br>
  <li> If you have any problem please contact with the admin.</li>

</ul>
</div>

<?php
}

?>



</body>
</html>