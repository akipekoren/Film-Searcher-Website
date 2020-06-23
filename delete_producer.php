
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
  <title> Actor List</title>
</head>
<body>

<div align="center">

<form action="index.php" method="GET">
<button class="button button1">Go back to Main Page</button>
</form>

</div>

<table>

<tr> <th> NAME </th> <th> NET WORTH </th>  <th> ACTIVE SINCE </th> <th> MOST KNOWN MOVIE </th> </tr>

<?php

$db = mysqli_connect('localhost','root','','deneme');



$sql_statement = "SELECT PRODUCER.NAME,PRODUCER.NET_WORTH,PRODUCER.PRODUCERID, PRODUCER.ACTIVE_SINCE, FILM.TITLE FROM PRODUCER INNER JOIN FILM WHERE FILM.FILMID = PRODUCER.FILMID";

$result = mysqli_query($db,$sql_statement);

while($row = mysqli_fetch_assoc($result))
  {
 
    $name = $row['NAME'];
    $net_worth = $row['NET_WORTH'];
    $active_since = $row['ACTIVE_SINCE'];
    $mov = $row['TITLE'];
    $link = "delete_p_db.php";

    echo "<tr>
<td>".$row["NAME"]."</td>
<td>".$row["NET_WORTH"]."</td>
<td>".$row["ACTIVE_SINCE"]."</td>
<td>".$row["TITLE"]."</td>

<td><a href='delete_p_db.php?id=".$row["PRODUCERID"]."' alt='edit'>Delete</a></td>
</tr>";

  }



  ?>


</table>

  </body>
</html>