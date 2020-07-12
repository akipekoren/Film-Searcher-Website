<?php

include 'functions.php';
session_start();


?>


<!DOCTYPE html>
<style>


body {
  background-image: url('b_2.png');
   background-repeat: no-repeat;
   background-attachment: fixed; 
  background-size: cover;

}
  

#div1
{

height:39px;
width: 700px;
padding: 0;
margin:0;


}


#main_list
{

position: absolute;
left:55px;
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


.center {
  position: absolute;	
  left: 83%;
  top: 70%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%); 

  width: 20px;
  height: 20px;
}
.message {
  position: absolute; 
  left: 90%;
  top: 45%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%); 

  width: 800px;
  height: 100px;
}

.filter
{
    position: absolute; 
  left: 65%;
  top: 24%;
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
</style>

<html>
<head>	
		<title>MAIN PAGE</title>
<style>
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
.button1 {
  position: absolute;
  left: 75%;
  top: 58%;
  width: 300px;}
.button2 {
  position: absolute;
  left: 75%;	
  top: 72%;
width: 300px;} 
.button3 {
  position: absolute;
  left: 75%;
  top: 65%;
width: 300px;} 

.button4 {
  position: absolute;
  left: 78%;
  top: 4%;
width: 125px;} 


.button5 {
  position: absolute;
  left: 88%;
  top: 4%;
width: 125px;} 


.logo_button {
  position: absolute;
  left: 1.5%;
  top: -1.5%;
  width: 95px;
  height: 100px;

  background-color:#3390FF;

} 

.button_inp {
  position: absolute;
  left: 650px;
  top: 730px;
  width: 200px;
  height: 30px;

  background-color:#3390FF;

} 

.user_name_place{

  position: absolute;
  left: 81%;
  top: 7%;

}

.f_name{

    position: absolute;
  left: 50%;
  top: 0%;
}

.f_director
{

    position: absolute;
  left: 50%;
  top: 26%;

}

.f_genre
{
    position: absolute;
  left: 50%;
  top: 52%;

}


.search_but
{

    position: absolute;
  left: 80%;
  top: 75%;  
}
</style>	

	</head>

<body>


<div class="header">

<h1> <i> FILM SEARCHER </i> </h1>

</div>


<div class="main" style="width:3000px;height:200px;border:3px solid #000;">

</div>


<?php

if(!isset($_SESSION['username']))
{

?>

<div class ="login">


<form action="login.php" method="POST">
<button class="button button4" >Login</button>


</form>
<form action="register.php" method="POST">
<button class="button button5" >Register</button>

</form>


  </div>

<?php


}

else
{

?>


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

<?php


}
?>

<form action="index.php" method="POST">
<button class="button logo_button"><i>FS</i></button>
</form>




<div class ="message">
<ul>

<b> Welcome to Movie Website, </b>
<br>
<br>
<li>You can insert, delete your favorite movies to your account.</li>
<br>
  <li>Also you can search actors and movies easily. </li>
<br>
  <li>Discuss movies with your friends.</li>
<br>
  <li>Make your movie plan and watch all of them.</li>
<br>
  <li>And more......</li>
<br>
  <li>For more information, please register and start to make your list!  </li>
<br>
<br>

</ul>
</div>



<?php


if(isset($_SESSION['email']) && $_SESSION['email'] == 'admin@gmail.com')

{

?>
<div class = "center" style="width:160px;height:120px;border:3px solid #000;">
<b>Insert Movie</b>
<form action="film_db.php" method="POST">
<input type = "text" name="csv_file"><br>
<button>Insert Movie to Database</button>
</form>


</div>



<?php

}


?>



<div id="main_list">
<div id="div1">
<table id=table1>

<tr>
 <th>TITLE</th>   
  <th>GENRE</th> 
   <th>RATING</th> 


   <?php
if(isset($_SESSION['email']) && isset($_SESSION['id']))
{

   ?>
   <th>ADD YOUR MOVIES  </th>


   <?php
 }


 if (!isset($_POST['search_button']))
 {

   ?>
 </tr>
</table>
</div>


<div id="div2">
<table id ="table2">

<?php

$db = mysqli_connect('localhost','root','','deneme');

$sql_statement = "SELECT * FROM MOVIES";

$result = mysqli_query($db,$sql_statement);

while($row = mysqli_fetch_assoc($result))
  {
 
    $filmid = $row['MOVIEID'];
    $title = $row['MOVIETITLE'];
    $genre = $row['GENRES'];
    $rating = $row['RATING'];

    $new_g = "";

    $new_name =   getName($genre,$new_g,0);
    

  
  echo "<tr>" . "<th>" . $title . "</th>" ."<th>" . $new_name . "</th>" . "<th>" . $rating .  "</th>";


  if(isset($_SESSION['email']) && $_SESSION['email'] == 'admin@gmail.com')
   { 
  ?>


  <td><a href='delete_f_db.php?id=".$row["MOVIEID"]."' alt='edit'>Delete</a></td>
    <td><a href='delete_f_db.php?id=".$row["MOVIEID"]."' alt='edit'>Edit</a></td>

    <td>
      <form action="check_box.php" method="post">
      <input type="checkbox" id="check_list[]" name="check_list[]" value="<?php echo $filmid; ?>">
    <label for="vehicle1"> I want this one!</label>
    </td>

   </tr>
  
  <?php
  } 

  else
  {

   if(isset($_SESSION['email']))

{ 

  $id = $_SESSION['id'];
  $sql_user_statement = "SELECT USER_MOVIE.MOVIEID FROM USER_MOVIE WHERE USER_MOVIE.MOVIEID = '$filmid' AND USER_MOVIE.USERID = '$id'" ;
  $result_user = mysqli_query($db,$sql_user_statement); 
  $count=$result_user->num_rows;

  if ($count > 0)
  {

    ?>

      <td>
          Already in your list
        </td>



    <?php

  } 

  else

  {


?>
      <td>
      <form action="check_box.php" method="post">
      <input type="checkbox" id="check_list[]" name="check_list[]" value="<?php echo $filmid; ?>">
      <label for="vehicle1"> I want this one! </label>

    </td>


  <?php
  }   
      ?>

  <?php
  }

}

}

}

else if (isset($_POST['search_button']) )
{

  ?>
</table>
</div>

<div id="div2">
<table id ="table2">
  <?php
  $db = mysqli_connect('localhost','root','','deneme');
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
  $filt_4 = " MOVIES.YEAR >= '$search_4' ";
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
    while($row = mysqli_fetch_assoc($result))
  {    
    $filmid = $row['MOVIEID'];
    $title = $row['MOVIETITLE'];
    $genre = $row['GENRES'];
    $rating = $row['RATING'];

    $new_g = "";

    $new_name =   getName($genre,$new_g,0);
    
  echo "<tr>" . "<th>" . $title . "</th>" ."<th>" . $new_name . "</th>" . "<th>" . $rating .  "</th>";

  if(isset($_SESSION['email']))
{ 

  $id = $_SESSION['id'];
  $sql_user_statement = "SELECT USER_MOVIE.MOVIEID FROM USER_MOVIE WHERE USER_MOVIE.MOVIEID = '$filmid' AND USER_MOVIE.USERID = '$id'" ;
  $result_user = mysqli_query($db,$sql_user_statement); 
  $count=$result_user->num_rows;

  if ($count > 0)
  {

    ?>

      <td>
          Already in your list
        </td>
    <?php

  } 
  else
  {
?>
      <td>
      <form action="check_box.php" method="post">
      <input type="checkbox" id="check_list[]" name="check_list[]" value="<?php echo $filmid; ?>">
      <label for="vehicle1"> I want this one! </label>

    </td>
  <?php
  }   
      ?>

  <?php
  }

  }

  ?>


</table>

</div>

<?php

}
  ?>



</table>

</div>

</div>

<?php

if(isset($_SESSION['email']))
{
?>
   <input type="submit" class="button_inp" name="formSubmit" value="Add!" />
    </form>

<?php
}
?>  




<div class = filter>

<div style="width:380px;height:90px;border:1px solid #000;">

    <form method="post">


    <div class="f_name">
  
          <input name="search_name" type="search" autofocus placeholder="Search movie">
    </div>

    <div class="f_rating">
          <input name="search_rating" type="search" autofocus placeholder="Filter rating">
    </div>


      <div class="f_year">
          <input name="search_year" type="search" autofocus placeholder="Year filter">
     </div>


    <div class="f_director">
          <input name="search_director" type="search" autofocus placeholder="Director filter">
    </div>


  <div class ="f_language">

      <select name="search_lang">  
        <option> Language of Movie</option>}  
        <option value="English">English</option>  
        <option value="German">German</option>   
        <option value="French">French</option>  
        <option value="Italian">Italian</option>
        <option value="Spanish">Spanish</option>  
        <option value="Russian">Russian</option>  
        <option value="Turkish">Turkish</option>  
        <option value="Japanese">Japanese</option>  
      </select> 
  </div>


  <div class ="f_genre">

      <select name="search_genre">  
        <option> Genre of Movie</option>}
        <option value="Action">Action</option>
        <option value="Adventure">Adventure</option>
        <option value="Animation">Animation</option> 
        <option value="Biography">Biography</option>  
        <option value="Comedy">Comedy</option>   
        <option value="Crime">Crime</option> 
        <option value="Drama">Drama</option> 
        <option value="Family">Family</option>
        <option value="History">History</option>
        <option value="Horror">Horror</option> 
        <option value="Musical">Musical</option>
        <option value="Mystery">Mystery</option>
        <option value="Romance">Romance</option>   
        <option value="Sci-Fi">Sci-Fi</option>
        <option value="Sport">Sport</option>  
        <option value="Thriller">Thriller</option> 
        <option value="War">War</option> 
        <option value="Western">Western</option> 

      </select> 
  </div>



  <div class = "search_but">

    <input type="submit" name="search_button" value="Search">

  </div>

  </form>
</div>


</div>







</body>
</html>