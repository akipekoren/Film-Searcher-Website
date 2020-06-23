<?php



if(isset($_GET['vkey']))
{

$vkey = $_GET['vkey'];

$db = mysqli_connect('localhost','root','','deneme');


$sql_statement = "UPDATE USERS SET email_check='1' WHERE controller='".$vkey."'";



$result = mysqli_query($db,$sql_statement);

echo "result" . " " .$result;


header("Location: http://localhost/myrecit/index.php");

}


?>