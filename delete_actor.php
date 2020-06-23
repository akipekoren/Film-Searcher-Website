
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

<tr> <th> NAME </th> <th> AGE </th>  <th> ACTIVE SINCE </th>  </tr>

<?php

$db = mysqli_connect('localhost','root','','deneme');


$sql_statement="SELECT * FROM ACTORS ";

$result = mysqli_query($db,$sql_statement);

while($row = mysqli_fetch_assoc($result))
  {
 
echo "<tr>
<td>".$row["ACTOR_NAME"]."</td>
<td>".$row["AGE"]."</td>
<td>".$row["ACTIVE_SINCE"]."</td>

<td><a href='delete_a_db.php?id=".$row["ACTORID"]."' alt='edit'>Delete</a></td>
</tr>";
  		
  }



  ?>


</table>

  </body>
</html>