<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];





if ($email &&  $password)
{

$db = mysqli_connect('localhost','root','','deneme');



 //$sql_statement = "SELECT COUNT(*) FROM USERS WHERE USERS.USERPASSWORD = $password AND USERS.EMAIL = $email";



			$result=mysqli_query($db,"SELECT COUNT(*) FROM USERS WHERE USERS.EMAIL ='$email' AND USERS.USERPASSWORD = $password AND USERS.EMAIL_CHECK = '1'");
			$data=mysqli_fetch_assoc($result);
			

			if ($data['COUNT(*)'] == 1)
			{


				$name_result=mysqli_query($db,"SELECT * FROM USERS WHERE USERS.EMAIL ='$email' AND USERS.USERPASSWORD = $password AND USERS.EMAIL_CHECK = '1'");
				$username=mysqli_fetch_assoc($name_result);	

				$_SESSION['username'] = $username['NAME'];
				$_SESSION['email'] = $username['EMAIL'];
				$_SESSION['id'] = $username['USERID'];

							echo'
				   <script>
				   window.onload = function() {
				      alert("Welcome!");
				      location.href = "index.php";  
				   }
				   </script>
				';

		
			}

			else
			{
echo'
				   <script>
				   window.onload = function() {
				      alert("Check please username and password or please confirm your registration!");
				      location.href = "login.php";  
				   }
				   </script>
				';

			}


}




else
{

		echo'
				   <script>
				   window.onload = function() {
				      alert("Some parts are missing!");
				      location.href = "login.php";  
				   }
				   </script>
				';
}




?>