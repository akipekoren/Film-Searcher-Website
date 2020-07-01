<?php

$db = mysqli_connect('localhost','root','','deneme');

session_start();

$id = $_SESSION['id'];

$pass = $_POST['password'];
$email = $_POST['email'];
$name = $_POST['name'];

$favAct = $_POST['favAct'];
$favMov = $_POST['favMov'];
$age = $_POST['age'];
$country = $_POST['country'];

	



$bio = $_POST['bio'];
$profile_photo = $_FILES['profileImage']['name'];


$destination_path = getcwd().DIRECTORY_SEPARATOR;

$target_path = $destination_path . 'images/'. basename( $_FILES["profileImage"]["name"]);


if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target_path))

{
	$query = mysqli_query($db, "SELECT * FROM Photo WHERE USERID = '$id'");

	$row = mysqli_fetch_assoc($query);

	if (empty($row['USERID']))
	{


	$sql = "INSERT INTO Photo (USERID,BIO,IMAGE) VALUES ('$id', '$bio', '$profile_photo')";
	$res = mysqli_query($db,$sql);
	}
	else
	{

	$sql = "UPDATE Photo SET USERID = '$id', BIO = '$bio', IMAGE = '$profile_photo' WHERE Photo.USERID = '$id'";

	$res = mysqli_query($db,$sql);

	}

}




$sql_statement = "SELECT * FROM USERS WHERE USERS.USERID = '$id'";

$sql_extra = "SELECT * FROM EXTRA_USERS WHERE EXTRA_USERS.USERID = '$id'";

$sql_bio = "SELECT * FROM Photo WHERE Photo.USERID = '$id'";

$sql_password = "SELECT USERPASSWORD FROM USERS WHERE USERS.USERID = '$id'";


$result = mysqli_query($db,$sql_statement);
$row = mysqli_fetch_assoc($result);

$result_pass =  mysqli_query($db,$sql_password);
$row_pass = mysqli_fetch_assoc($result_pass);

$result_extra = mysqli_query($db,$sql_extra);
$row_extra = mysqli_fetch_assoc($result_extra);

$result_bio = mysqli_query($db,$sql_bio);
$row_bio = mysqli_fetch_assoc($result_bio);


if ($row_pass["USERPASSWORD"] == $pass)
{

if ($row["EMAIL"] != $email)
{
	$sql = "UPDATE USERS SET USERS.EMAIL = '$email' WHERE USERS.USERID = '$id'";
	$result = mysqli_query($db,$sql);
}
if ($row["NAME"] != $name)
{
	$sql = "UPDATE USERS SET USERS.NAME = '$name' WHERE USERS.USERID = '$id'";
	$result = mysqli_query($db,$sql);
}
if ($row_extra["COUNTRY"] != $country)
{
	$sql = "UPDATE EXTRA_USERS SET EXTRA_USERS.COUNTRY = '$country' WHERE EXTRA_USERS.USERID = '$id'";
	$result = mysqli_query($db,$sql);
}

if ($row_extra["AGE"] != $age)
{
	$sql = "UPDATE EXTRA_USERS SET EXTRA_USERS.AGE = '$age' WHERE EXTRA_USERS.USERID = '$id'";
	$result = mysqli_query($db,$sql);
}

if ($row_extra["FAVMOV"] != $favMov)
{
	$sql = "UPDATE EXTRA_USERS SET EXTRA_USERS.FAVMOV = '$favMov' WHERE EXTRA_USERS.USERID = '$id'";
	$result = mysqli_query($db,$sql);
}

if ($row_extra["FAVACT"] != $favAct)
{
	$sql = "UPDATE EXTRA_USERS SET EXTRA_USERS.FAVACT = '$favAct' WHERE EXTRA_USERS.USERID = '$id'";
	$result = mysqli_query($db,$sql);
}

if ($row_bio["BIO"] != $bio)
{

	$sql = "UPDATE Photo SET Photo.BIO = '$bio' WHERE Photo.USERID = '$id'";
	$result = mysqli_query($db,$sql);
}


					echo'
				   <script>
				   window.onload = function() {
				      alert("Profile is updated!");
				      location.href = "profile.php";  
				   }
				   </script>
				';




}

else
{
					echo'
				   <script>
				   window.onload = function() {
				      alert("Password is wrong!");
				      location.href = "profile.php";  
				   }
				   </script>
				';

}


?>