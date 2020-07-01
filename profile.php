

<?php
$db = mysqli_connect('localhost','root','','deneme');

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

.button7 {
  position: absolute;
  left: -5%;
  top: 105%;

width: 220px;
height:30px;

} 

.button8 {
  position: absolute;
  left: 0%;
  top: 65%;

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

.ProfData
{   
  position: absolute;
  left: 30%;
  top: 30%;

}

.Photo_loc
{
  position: absolute;
  left: 60%;
  top: 37%;
  height:128px;
  width: 128px;
}

.Prof_header
{

    position: absolute;
  left: 68%;
  top: 32%;
}

.Profile
{
   position: absolute;
  left: 50%;
  top: 20%;
}

.ask_pass
{
  position: absolute;
  left: 182%;
  top: 60%;
}

.up_but
{
  position: absolute;
  left: 180%;
  top: 80%;
}

.Photo
{
     
  position: absolute;
  left: -190%;
  top: 17%;
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
 <button class= "button button4"  name = "myProf" >My Profile</button>
</form>

<form method="POST">
 <button class= "button button2"  name = "myMovies" >My Movies</button>
</form>

<form method="POST">
 <button class= "button button3"  name = "myComments" >My Comments</button>
</form>

<form method="POST">
 <button class= "button button6"  name = "profSet" >Profile Settings</button>
</form>

<form method="POST" action="index.php">
 <button class= "button button8"  name = "menu" >Add Movie to My list</button>
</form>






<?php

if(isset($_POST["myMovies"]) || (!isset($_POST["Rules"]) && !isset($_POST["myProf"]) && !isset($_POST["myMovies"]) && !isset($_POST["myComments"]) && !isset($_POST["profSet"])))

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




//$sql_statement = "SELECT FILM.FILMID, FILM.TITLE,FILM.GENRE,FILM.RATING,FILM.LANGUAGE,FILM.DIRECTOR,FILM.COUNTRY, FILM.YEAR, MONEY_SUPPLIES.MONEY_MADE,FILM_WINS_AWARDS.NAME FROM FILM INNER JOIN MONEY_SUPPLIES INNER JOIN FILM_WINS_AWARDS WHERE FILM.FILMID = MONEY_SUPPLIES.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID" ;
$id = $_SESSION['id'];

$sql_statement = "SELECT * FROM USER_FILM INNER JOIN FILM WHERE USER_FILM.FILMID = FILM.FILMID AND USER_FILM.USERID = '$id' " ;


$result = mysqli_query($db,$sql_statement);



//$result = mysqli_query($db,$sql_statement);


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


else if (isset($_POST["profSet"]))
{
$id = $_SESSION['id'];

$sql_statement = "SELECT * FROM USERS WHERE  USERS.USERID = '$id' " ;

$result = mysqli_query($db,$sql_statement);
$row = mysqli_fetch_assoc($result);



$sql_extra = "SELECT * FROM EXTRA_USERS WHERE EXTRA_USERS.USERID = '$id' ";
$result_ext = mysqli_query($db,$sql_extra);
$row_ext = mysqli_fetch_assoc($result_ext);


$sql_upload = "SELECT * FROM Photo WHERE Photo.USERID = '$id' ";
$result_up = mysqli_query($db,$sql_upload);
$row_up = mysqli_fetch_assoc($result_up);


$name = $row["NAME"];
$email = $row["EMAIL"];
$pass = $row["USERPASSWORD"];

$country = $row_ext["COUNTRY"];
$favMov = $row_ext["FAVMOV"];
$favAct = $row_ext["FAVACT"];
$age = $row_ext["AGE"];

$bio = $row_up["BIO"];



?>

<div class="Profile">

<h1> Change Profile </h1>
<form action="update_profile.php" method="POST" enctype="multipart/form-data">


<label for="fname">Email  </label>
<br>
<input type = "text" value= "<?php echo $email ?>" name="email" style="height:20px; width:200px;font-size:9pt;" ><br>
<br>

<label for="fname">Name  </label>
<br>
<input type = "text" value= "<?php echo $name ?>" name="name" style="height:20px; width:200px;font-size:9pt;" ><br>
<br>

<label for="fname">Country  </label>
<br>
<input type = "text" value= "<?php echo $country ?>" name="country" style="height:20px; width:200px;font-size:9pt;" ><br>
<br>

<label for="fname">Age  </label>
<br>
<input type = "text" value= "<?php echo $age ?>" name="age" style="height:20px; width:200px;font-size:9pt;" ><br>
<br>

<label for="fname">Favourite Movie  </label>
<br>
<input type = "text" value= "<?php echo $favMov ?>" name="favMov" style="height:20px; width:200px;font-size:9pt;" ><br>
<br>

<label for="fname">Favourite Actor  </label>
<br>
<input type = "text" value= "<?php echo $favAct ?>" name="favAct" style="height:20px; width:200px;font-size:9pt;" ><br>
<br>

<div class = "ask_pass">
<label for="fname">Password to confirm the changes </label>
<br>
<input type = "Password"  name="password" style="height:20px; width:200px;font-size:9pt;" required ><br>

</div>


<div class="Photo">


   <label for="bio"> Bio </label>
    <br>
    <textarea name="bio" id="bio"  rows="7" cols="45"> <?php echo $bio ?> </textarea>
    <br>
    <br>
    <br>
    <br>

    <label for="profileImage"> Upload Profile Image </label>
    <br>
    <br>
    <input type="file" name="profileImage" id = "profileImage">

 


 </div>

<div class = "up_but">

<button type="submit" name="save-user" class="button button7" > Update Profile </button>

</div>


</form>

</div>





<?php

}

else if (isset($_POST["myProf"]))
{
$id = $_SESSION['id'];

$sql_statement = "SELECT * FROM USERS WHERE  USERS.USERID = '$id' " ;

$result = mysqli_query($db,$sql_statement);
$row = mysqli_fetch_assoc($result);



$sql_extra = "SELECT * FROM EXTRA_USERS WHERE EXTRA_USERS.USERID = '$id' ";
$result_ext = mysqli_query($db,$sql_extra);
$row_ext = mysqli_fetch_assoc($result_ext);


$sql_upload = "SELECT * FROM Photo WHERE Photo.USERID = '$id' ";
$result_up = mysqli_query($db,$sql_upload);
$row_up = mysqli_fetch_assoc($result_up);


$name = $row["NAME"];
$email = $row["EMAIL"];
$pass = $row["USERPASSWORD"];

$country = $row_ext["COUNTRY"];
$favMov = $row_ext["FAVMOV"];
$favAct = $row_ext["FAVACT"];
$age = $row_ext["AGE"];
$bio = $row_up["BIO"];
$img_src = $row_up["IMAGE"];



?>


<div class = "ProfData">

<ul>
  <li> <b> Name</b> : <?php  echo $name ?></li>
  <br>
  <li><b>Email</b> : <?php echo $email ?> </li>
  <br>
  <li><b>Age</b> : <?php echo $age ?> </li>
  <br>
  <li><b> Country</b> : <?php echo $country ?> </li>
  <br>
  <li><b> Favorite Movie</b> : <?php echo $favMov ?> </li>
  <br>
  <li><b> Favorite Actor</b> : <?php echo $favAct ?> </li>
  <br>
  <li><b> Biography </b> : <?php echo $bio ?> </li>

</ul>




</div>

<div class="Prof_header">

<b>Profile Photo</b>
</div>



<?php

if (isset($img_src))
{


?>
<div class="Photo_loc">
<img src="<?php echo $img_src?>" alt=HTML5 Icon >
</div>

<?php

}
else
{
?>
<div class="Photo_loc">
<img src="yy.png" alt=HTML5 Icon width="320px" height="240px" >
</div>

  <?php
}

}

?>



</body>
</html>