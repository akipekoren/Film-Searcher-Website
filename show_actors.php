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
  left: 70%;
  top: 7%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%); 

  width: 300px;
  height: 100px;
}


.center {
  position: absolute; 
  left: 40%;
  top: 7%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%); 

  width: 300px;
  height: 100px;
}
</style>


  <title> Actors List </title>
</head>
<body>

<div class="left">

<form action="show_actors.php" method="post">

  <input name="search" type="search" placeholder= "Name of the actor" autofocus><input type="submit" name="button">

</form>

</div>





<div class="center">

<form action="show_actors.php" method="post">

  <input name="search" type="search" placeholder= "Age filter" autofocus><input type="submit" name="button2">

</form>

</div>




<div class = "right">
<form action="index.php" method="GET">
<button class="button button1">Go back to main page</button>
</form>

</div>
<table>
<br>
<br>
<tr> <th> NAME </th> <th> AGE </th>  <th> ACTIVE SINCE </th>  </tr>

<?php

$db = mysqli_connect('localhost','root','','deneme');



if(isset($_POST['button']))
{ 

$search = $_POST['search'];

$sql_statement="SELECT * FROM ACTORS WHERE ACTORS.ACTOR_NAME LIKE '%{$search}%' ";

$result = mysqli_query($db,$sql_statement);


while($row = mysqli_fetch_assoc($result))
  {
 
    $name = $row['ACTOR_NAME'];
    $age = $row['AGE'];
    $active_since = $row['ACTIVE_SINCE'];

  echo "<tr>" . "<th>" . $name . "</th>" . "<th>" . $age . "</th>" . "<th>" . $active_since . "</th>" . "</tr>" ;
    

  }


}

else if(isset($_POST['button2']))
{
  $search = $_POST['search'];

  $sql_statement="SELECT * FROM ACTORS WHERE ACTORS.AGE > '$search' ";

  $result = mysqli_query($db,$sql_statement);


  while($row = mysqli_fetch_assoc($result))
    {
   
      $name = $row['ACTOR_NAME'];
      $age = $row['AGE'];
      $active_since = $row['ACTIVE_SINCE'];

    echo "<tr>" . "<th>" . $name . "</th>" . "<th>" . $age . "</th>" . "<th>" . $active_since . "</th>" . "</tr>" ;
      

    }
}
else
{


$sql_statement = "SELECT * FROM ACTORS";



$result = mysqli_query($db,$sql_statement);




while($row = mysqli_fetch_assoc($result))
  {
 
    $name = $row['ACTOR_NAME'];
    $age = $row['AGE'];
    $active_since = $row['ACTIVE_SINCE'];

  echo "<tr>" . "<th>" . $name . "</th>" . "<th>" . $age . "</th>" . "<th>" . $active_since . "</th>" . "</tr>" ;
    

  }

}
  ?>


</table>
</body>
</html>