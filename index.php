<?php


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

height:30px;
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
  left: 94%;
  top: 27%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%); 

  width: 800px;
  height: 100px;
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
  left: 600px;
  top: 550px;
  width: 200px;
  height: 30px;

  background-color:#3390FF;

} 



.user_name_place{

  position: absolute;
  left: 81%;
  top: 7%;

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
<div class = "center" style="width:120px;height:120px;border:3px solid #000;">
<b>Insert Producer</b>
<form action="producer.php" method="POST">
<button>Insert Movie to Database</button>
</form>
<b>Insert Actor</b>
<form action="actor.php" method="POST">
<button >Delete Movie from Database</button>
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
   ?>
 </tr>

</div>
</table>

<div id="div2">
<table id ="table2">

<?php

$db = mysqli_connect('localhost','root','','deneme');


$sql_statement = "SELECT FILM.FILMID, FILM.TITLE,FILM.GENRE,FILM.RATING,FILM.LANGUAGE,FILM.DIRECTOR,FILM.COUNTRY, FILM.YEAR, MONEY_SUPPLIES.MONEY_MADE,FILM_WINS_AWARDS.NAME FROM FILM INNER JOIN MONEY_SUPPLIES INNER JOIN FILM_WINS_AWARDS WHERE FILM.FILMID = MONEY_SUPPLIES.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID" ;


if (isset($_SESSION['id']))
{
$id = $_SESSION['id'];
$sql_user_statement = "SELECT USER_FILM.FILMID FROM USER_FILM WHERE USER_FILM.USERID = '$id'" ;

$result_user = mysqli_query($db,$sql_statement);


}


$result = mysqli_query($db,$sql_statement);

while($row = mysqli_fetch_assoc($result))
  {
 
    $title = $row['TITLE'];
    $rating = $row['RATING'];
    $genre = $row['GENRE'];
    $year = $row['YEAR'];
    $language = $row['LANGUAGE'];
    $country = $row['COUNTRY'];
    $money_made = $row['MONEY_MADE'];
    $awards = $row['NAME'];
    $director = $row['DIRECTOR'];
    $filmid = $row['FILMID'];
    

  
  echo "<tr>" . "<th>" . $title . "</th>" ."<th>" . $genre . "</th>" . "<th>" . $rating .  "</th>";


  if(isset($_SESSION['email']) && $_SESSION['email'] == 'admin@gmail.com')
   { 
  ?>


  <td><a href='delete_f_db.php?id=".$row["FILMID"]."' alt='edit'>Delete</a></td>
    <td><a href='delete_f_db.php?id=".$row["FILMID"]."' alt='edit'>Edit</a></td>

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
  $sql_user_statement = "SELECT USER_FILM.FILMID FROM USER_FILM WHERE USER_FILM.FILMID = '$filmid'  AND USER_FILM.USERID = '$id'" ;
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



</body>
</html>