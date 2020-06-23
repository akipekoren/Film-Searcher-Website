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

	<title>Film</title>
</head>

<body>
</form>
<body>

<div class="center">
<form action="film_db.php" method="POST">

<label for="fname">Genre</label><br>
<input type = "text" name="genre"><br>

<label for="fname">Rating</label><br>
<input type = "text" name="rating"><br>

<label for="fname">Year</label><br>
<input type = "text" name="year"><br>

<label for="fname">Language</label><br>
<input type = "text" name="language"><br>

<label for="fname">Country</label><br>
<input type = "text" name="country"><br>

<label for="fname">Title</label><br>
<input type = "text" name="title"><br>

<label for="fname">Director</label><br>
<input type = "text" name="director"><br>


<button>add</button>
</form>
</div>
</body>
</html>