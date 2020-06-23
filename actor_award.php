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
	<title>AWARD</title>
</head>
<body>
<div class="center">
<form action="actor_award_db.php" method="POST">
<label for="fname">Name of the Award</label><br>
<input type = "text" name="award_name"><br>
<label for="quantity">Type of the Award</label><br>
<input type = "text" name="award_type"><br>
<label for="quantity">Award ID</label><br>
<input type = "text" name="awardid"><br>
<label for="quantity">Actor ID</label><br>
<input type = "text" name="actorid"><br>

	<button>add to db</button>
</form>

</div>
</body>
</html>