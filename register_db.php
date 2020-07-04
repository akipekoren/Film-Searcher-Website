<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['confirm_Password'];





if ($name && $email &&  $password && $cpassword)
{


		 if (strpos($email, '@') === FALSE)
		{
				echo'
				   <script>
				   window.onload = function() {
				      alert("Please Enter a Valid Email Adress");
				      location.href = "register.php";  
				   }
				   </script>
				';

		}



		else

		{

		if(strlen($password) < 6 || 0 === preg_match('~[0-9]~', $password))
		{
					echo'
				   <script>
				   window.onload = function() {
				      alert("Password cannot be less than 6 characters and it needs to contain at least 1 number");
				      location.href = "register.php";  
				   } 
				   </script>
				';

		}
		else

		{



	if ($password == $cpassword)
	{



		$db = mysqli_connect('localhost','root','','deneme');


		//$sql_email_control = "SELECT COUNT(*) FROM USERS WHERE USERS.EMAIL ='$email'";

		//echo "count : " . " " . $sql_email_control;



			$result=mysqli_query($db,"SELECT COUNT(*) FROM USERS WHERE USERS.EMAIL ='$email'");
			$data=mysqli_fetch_assoc($result);


		if ($data['COUNT(*)'] != 0 )
		{
			echo'
				   <script>
				   window.onload = function() {
				      alert("Your email address is already registered");
				      location.href = "register.php";  
				   }
				   </script>
				';
			//echo "This email is already registered";
			//header("Location: http://localhost/myrecit/register.php");
			

		}

		else

		{


					$vkey = md5(time().$name);

					$sql_statement = "INSERT INTO users(NAME,EMAIL,USERPASSWORD,EMAIL_CHECK,CONTROLLER)
								VALUES ('$name','$email', '$password', '0', '$vkey')" ;

				
			
					$db_id=mysql_insert_id();

					
					$result = mysqli_query($db,$sql_statement);

				    

					$sql_get_id = "SELECT USERID FROM USERS WHERE USERS.EMAIL ='$email'";

					$res_id =  mysqli_query($db,$sql_get_id);


				    $row = mysqli_fetch_assoc($res_id);


				    $id = $row["USERID"];

							$sql_2 = "INSERT INTO EXTRA_USERS(USERID)
     				 VALUES ('$id')" ;

					$result_2 = mysqli_query($db,$sql_2);

					if ($result)
					{


					require 'vendor/autoload.php';

					$mail = new PHPMailer(true);


					try {
					    //Server settings
					    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
					    $mail->isSMTP();                                            // Send using SMTP
					    $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
					    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
					    $mail->Username   = '90b86aa583211b';                     // SMTP username
					    $mail->Password   = 'ba4edef9130750';                               // SMTP password
					    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
					    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

					    //Recipients
					    $mail->setFrom('film_mail_server@yahoo.com', 'Mailer');
					    $mail->addAddress($email, $name);     // Add a recipient
					             // Name is optional
					    //$mail->addReplyTo('info@example.com', 'Information');
					    //$mail->addCC('cc@example.com');
					    //$mail->addBCC('bcc@example.com');

		

					    // Content
					    $mail->isHTML(true);                                  // Set email format to HTML
					    $mail->Subject = 'Email Confirmation for FilmWebsite';
					    $mail->Body = "<a href='http://localhost/myrecit/verify.php?vkey=$vkey'>Click this link to complete registration</a>";
				

					    $mail->send();
					    		
					echo '
				   <script>
				   window.onload = function() {
				      alert("Thank you for register, we have sent a confirmation link to your email");
				      location.href = "index.php";  
				   }
				   </script>
					';
					}

					catch (Exception $e) {
								    		echo '
						   <script>
						   window.onload = function() {
						      alert("Email cannot be sent, please try again");
						      location.href = "register.php";  
						   }
						   </script>
							';
								}













					//$to = $email;
					//$subject = "Email Verification";
					//$sender_email = "film_mail_server.yahoo.com";
					//$sender_name = "film server";
					//$message = "<a href='http://localhost/myrecit/verify.php?vkey=$vkey'>Register Account</a>";


					//$headers = "From: film_mail_server@yahoo.com \r\n";
					//$headers .= "MIME-Version: 1.0" . "\r\n";
					//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

					//mail($to, $subject, $message,$headers);

 			
					//echo '
				   //<script>
				   //window.onload = function() {
				    //  alert("Thank you for register, we have sent a confirmation link to your email");
				    //  location.href = "index.php";  
				   //}
				   //</script>
				//';

					//	header("Location: http://localhost/myrecit/");

				  }

				  else
				  	{
				  		echo "Something is wrong";
				  	}


		}


	}

	else
	{

				echo'
				   <script>
				   window.onload = function() {
				      alert("Your passwords are not the same!");
				      location.href = "register.php";  
				   }
				   </script>
				';


	}



}

}

}
else
{
	echo'
				   <script>
				   window.onload = function() {
				      alert("Some parts are missing!");
				      location.href = "register.php";  
				   }
				   </script>
				';
}



?>