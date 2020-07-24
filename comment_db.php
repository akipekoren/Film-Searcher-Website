
<?php
include 'functions.php';

$db = mysqli_connect('localhost','root','','deneme');

session_start();


if (isset($_POST["add_com"]))
{

$id = $_SESSION['id'];

$filmid = $_POST['add_com'];

$comment = $_POST['comment'];

$date = date("Y-m-d H:i:s");

$sql = "INSERT INTO USER_COMMENT (userid, movieid, date_time, user_comment) VALUES ('$id','$filmid','$date', '$comment')";

$result = mysqli_query($db,$sql);

header("Location: http://localhost/myrecit/profile.php");
}

?>