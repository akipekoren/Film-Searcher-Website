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
  <title> Producers List </title>
</head>
<body>

<div align="center">
</form>

<form action="index.php" method="GET">
<button class="button button1">Go back to Main Page</button>
</form>

</div>

<table>

<tr> <th> NAME </th> <th> NET WORTH </th>  <th> ACTIVE SINCE </th> <th> MOST KNOWN MOVIE </th> </tr>

<?php

$db = mysqli_connect('localhost','root','','deneme');


$sql_statement = "SELECT PRODUCER.NAME,PRODUCER.NET_WORTH, PRODUCER.ACTIVE_SINCE, FILM.TITLE FROM PRODUCER INNER JOIN FILM WHERE FILM.FILMID = PRODUCER.FILMID";



$result = mysqli_query($db,$sql_statement);


while($row = mysqli_fetch_assoc($result))
  {
 
    $name = $row['NAME'];
    $net_worth = $row['NET_WORTH'];
    $active_since = $row['ACTIVE_SINCE'];
    $mov = $row['TITLE'];

  echo "<tr>" . "<th>" . $name . "</th>" . "<th>" . $net_worth . "</th>" . "<th>" . $active_since . "</th>" . "<th>" . $mov . "</th>"  . "</tr>";
    

  }


  ?>


</table>
</body>
</html>