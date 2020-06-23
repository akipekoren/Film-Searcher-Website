<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
$db = mysqli_connect('localhost','root','','deneme');

$id = $_GET['id'];


function deleteRecord(mysqli $db, $id)
{

$sql_statement = "DELETE FROM  PRODUCER WHERE PRODUCERID = '".$id."' ";
$db->query($sql_statement);	
}

deleteRecord($db,$id);



header("Location: http://localhost/myrecit/delete_producer.php");

?>

</body>
</html>