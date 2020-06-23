<!DOCTYPE html>
<style>

	body {
  background-image: url('e.jpg');
   background-repeat: no-repeat;
   background-attachment: fixed; 
  background-size: cover;
}

.center {
  position: absolute;	
  left: 15%;
  top: 15%;	
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%); 

  width: 100px;
  height: 100px;
} 

</style>
<html>
<head>
	<title>Producer</title>
</head>
<body>
<div class="center">
<form action="producer_db.php" method="POST">
<label for="fname">Name</label><br>
<input type = "text" name="name"><br>
<label for="fname">Net Worth of the Producer</label><br>
<input type = "text" name="net_worth"><br>
<label for="fname">Active since</label><br>
<input type = "text" name="active_since"><br>
<label for="fname">Film ID</label><br>
<input type = "text" name="filmid"><br>

	<button>add to db</button>
</form>
</div>
</body>
</html>