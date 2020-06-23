
<!DOCTYPE html>
<html>
<head>
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}


.ct {
  position: absolute; 
  left: 30%;
  top: 7%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%); 

  width: 300px;
  height: 100px;
}

.left {
  position: absolute; 
  left: 15%;
  top: 7%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%); 

  width: 300px;
  height: 100px;
}


.right {
  position: absolute; 
  left: 50%;
  top: 7%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%); 

  width: 300px;
  height: 100px;
}

.center {
  position: absolute; 
  left: 70%;
  top: 7%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%); 

  width: 300px;
  height: 100px;
}
</style>
	<title> Movie List</title>
</head>
<body>

<div class="ct">

<form action="show_movies.php" method="post">

  <input name="search" type="search" autofocus placeholder="Search movie"><input type="submit" name="button" >

</form>

</div>
<div class="center">
<form action="index.php" method="GET">
<button class="button button1">Go back to Main Page</button>
</form>
</div>

</div>

<div class="right">

<form action="show_movies.php" method="post">

  <input name="search" type="search" autofocus placeholder="Filter rating"><input type="submit" name="button2" >

</form>

</div>

<div class ="left">

<form method="post">
<select name="genre">  
  <option> Genre of Movie</option>}  
  <option value="Drama">Drama</option>  
  <option value="Romance">Romance</option>   
  <option value="Horror">Horror</option>  
  <option value="Crime">Crime</option>  
  <option value="Sci-Fi">Sci-Fi</option>  
  <option value="Biography">Biography</option>  
  <option value="Action">Action</option>  
</select> 
<button type ="submit" name="dropdown" >Submit</button>
</form>
</div>

<table>
  <br>
   <br>
      <br>

<tr> <th> TITLE </th> <th> GENRE </th>  <th> RATING </th> <th> YEAR </th> <th> LANGUAGE </th>  <th> COUNTRY </th> <th> DIRECTOR </th> <th> BOX OFFICE </th> <th> AWARD </th>  </tr>

<?php

$db = mysqli_connect('localhost','root','','deneme');

if(isset($_POST['button']) || isset($_POST['button2']) || isset($_POST['dropdown']) )
{

if(isset($_POST['button']))
{ 

$search = $_POST['search'];

$sql_statement="SELECT FILM.TITLE,FILM.GENRE,FILM.RATING,FILM.LANGUAGE,FILM.COUNTRY, FILM.YEAR,FILM.DIRECTOR, MONEY_SUPPLIES.MONEY_MADE,FILM_WINS_AWARDS.NAME FROM FILM INNER JOIN MONEY_SUPPLIES INNER JOIN FILM_WINS_AWARDS  WHERE FILM.TITLE LIKE '%{$search}%'  AND FILM.FILMID = MONEY_SUPPLIES.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID ";

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
  	


 	echo "<tr>" . "<th>" . $title . "</th>" ."<th>" . $genre . "</th>" . "<th>" . $rating .  "</th>" . "<th>" . $year . "</th>" . "<th>" . $language . "</th>" . "<th>" .  $country . "</th>". "<th>" .  $director . "</th>" . "<th>" . $money_made . "</th>". "<th>" . $awards. "</th>" . "</tr>" ;
  	
  }

}

if (isset($_POST['dropdown']))
{

$search = $_POST['genre'];

  $sql_statement="SELECT FILM.TITLE,FILM.GENRE,FILM.RATING,FILM.LANGUAGE,FILM.DIRECTOR,FILM.COUNTRY, FILM.YEAR, MONEY_SUPPLIES.MONEY_MADE,FILM_WINS_AWARDS.NAME FROM FILM INNER JOIN MONEY_SUPPLIES INNER JOIN FILM_WINS_AWARDS  WHERE  FILM.FILMID = MONEY_SUPPLIES.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID AND FILM.GENRE ='$search' ";

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
    


  echo "<tr>" . "<th>" . $title . "</th>" ."<th>" . $genre . "</th>" . "<th>" . $rating .  "</th>" . "<th>" . $year . "</th>" . "<th>" . $language . "</th>" . "<th>" .  $country . "</th>" . "<th>" .  $director . "</th>". "<th>" . $money_made . "</th>". "<th>" . $awards. "</th>" . "</tr>" ;
    
  }

}



if (isset($_POST['button2']))
{
  $search = $_POST['search'];



  $sql_statement="SELECT FILM.TITLE,FILM.GENRE,FILM.RATING,FILM.LANGUAGE,FILM.DIRECTOR,FILM.COUNTRY, FILM.YEAR, MONEY_SUPPLIES.MONEY_MADE,FILM_WINS_AWARDS.NAME FROM FILM INNER JOIN MONEY_SUPPLIES INNER JOIN FILM_WINS_AWARDS  WHERE  FILM.FILMID = MONEY_SUPPLIES.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID AND FILM.RATING >= '$search' ";


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
    


  echo "<tr>" . "<th>" . $title . "</th>" ."<th>" . $genre . "</th>" . "<th>" . $rating .  "</th>" . "<th>" . $year . "</th>" . "<th>" . $language . "</th>" . "<th>" .  $country . "</th>" . "<th>" .  $director . "</th>". "<th>" . $money_made . "</th>". "<th>" . $awards. "</th>" . "</tr>" ;
    
  }
}

}
else
{

$sql_statement = "SELECT FILM.TITLE,FILM.GENRE,FILM.RATING,FILM.LANGUAGE,FILM.DIRECTOR,FILM.COUNTRY, FILM.YEAR, MONEY_SUPPLIES.MONEY_MADE,FILM_WINS_AWARDS.NAME FROM FILM INNER JOIN MONEY_SUPPLIES INNER JOIN FILM_WINS_AWARDS WHERE FILM.FILMID = MONEY_SUPPLIES.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID" ;

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
  	


 	echo "<tr>" . "<th>" . $title . "</th>" ."<th>" . $genre . "</th>" . "<th>" . $rating .  "</th>" . "<th>" . $year . "</th>" . "<th>" . $language . "</th>" . "<th>" .  $country . "</th>" . "<th>" .  $director . "</th>". "<th>" . $money_made . "</th>". "<th>" . $awards. "</th>" . "</tr>" ;
  	
  }
}

  ?>


</table>

  </body>
</html>


