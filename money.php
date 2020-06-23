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
	<title>Actor</title>
</head>
<body>
<div class="center">
<form action="money_db.php" method="POST">
<label for="fname">Money spent for the movie</label><br>
<input type = "text" name="money_spent"><br>
<label for="quantity">Money earned by movie</label><br>
<input type = "text" name="money_earned"><br>
<label for="fname">Film ID</label><br>
<input type = "text" name="filmid"><br>

	<button>add to db</button>
</form>

</div>
</body>
</html>