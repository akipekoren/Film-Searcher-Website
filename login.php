<!DOCTYPE html>
<html>

<style>


body {
  background-image: url('b_2.png');
   background-repeat: no-repeat;
   background-attachment: fixed; 
  background-size: cover;
}

.input_page {

position: absolute; 
left: 500px;
bottom: 300px;

}


.header {
  position: absolute; 
  left: 41%;
  top: 6%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%); 
  font-size: 25px;
  width: 500px;
  height: 100px;
  color: #6433FF
}



.secondHeader
{

 position: absolute; 
  left: 39%;
  top: 16%;
    font-size: 28px;

}

.button {
  border: 2px ;
  color: black;
  padding: 5px 15px;
  text-align: center;	
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 5px;
  cursor: pointer;
}

.logo_button {
  position: absolute;
  left: 1.5%;
  top: -1.5%;
  width: 95px;
  height: 100px;

  background-color:#3390FF;

} 

.main {
  position: absolute; 
  left: 1%;
  top: 0%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%); 

  width: 300px;
  height: 100px;
}

.add_db {

  border: 2px ;
  color: black;
  padding: 5px 44px;
  text-align: center;	
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 5px;
  cursor: pointer;

}



.add_db_r {
   
     position: absolute; 
  left: 500px;
  bottom: 250px;
  border: 2px ;
  color: black;
  padding: 5px 54px;
  text-align: center;	
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 5px;
  cursor: pointer;

}


</style>
<head>
	<title></title>
</head>
<body>

<div class="header">

<h1> <i> FILM SEARCHER </i> </h1>

</div>

<div class="secondHeader">

<p> <i> Login</i> </p>
</div>





<div class="main" style="width:3000px;height:200px;border:3px solid #000;">

</div>



<div class="input_page">

<br>
<br>
<form action="login_db.php" method="POST">
<br>

<label for="fname">Email </label><br>
<input type = "text" name="email" style="height:20px; width:200px;font-size:9pt;" ><br>

<br>

<label for="fname">Password</label><br>
<input type = "Password" name="password" style="height:20px; width:200px;font-size:9pt;" ><br>

<br>

	<button class="button add_db" >Login Now !</button>
	<br>
	<br>
	If you do not have an account, please register.
</form>
<br>




</div>



	<form action="register.php" method=	"POST">

	<br>
	<button class= "add_db_r">Register</button>
	</form>


  <form action="index.php" method="POST">
<button class="button logo_button"><i>FS</i></button>
</form>


</body>
</html>