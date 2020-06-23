
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
</style>
	<title> Movie List</title>
</head>
<body>

<div align="center">


<form action="index.php" method="GET">
<button class="button button1">Go back to Main Page</button>
</form>

</div>

<table>

<tr> <th> TITLE </th> <th> GENRE </th>  <th> RATING </th> <th> YEAR </th> <th> LANGUAGE </th>  <th> COUNTRY </th> <th> BOX OFFICE </th> <th> AWARD </th>  </tr>

<?php

$db = mysqli_connect('localhost','root','','deneme');


$sql_statement = "SELECT FILM.TITLE,FILM.GENRE,FILM.RATING,FILM.LANGUAGE,FILM.COUNTRY,FILM.FILMID, FILM.YEAR, MONEY_SUPPLIES.MONEY_MADE,FILM_WINS_AWARDS.NAME FROM FILM INNER JOIN MONEY_SUPPLIES INNER JOIN FILM_WINS_AWARDS WHERE FILM.FILMID = MONEY_SUPPLIES.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID AND FILM.FILMID = FILM_WINS_AWARDS.FILMID" ;

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
    $link = "delete_f_db.php";

    echo "<tr>
<td>".$row["TITLE"]."</td>
<td>".$row["RATING"]."</td>
<td>".$row["GENRE"]."</td>
<td>".$row["YEAR"]."</td>
<td>".$row["LANGUAGE"]."</td>
<td>".$row["COUNTRY"]."</td>
<td>".$row["MONEY_MADE"]."</td>
<td>".$row["NAME"]."</td>
<td><a href='delete_f_db.php?id=".$row["FILMID"]."' alt='edit'>Delete</a></td>
</tr>";
  	

  	
  }




  ?>


</table>

  </body>
</html>