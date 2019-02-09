 <?php include "database.php"; ?>

<?php

  $query="select * from shouts order by time desc limit 100";
  $shouts = mysqli_query($con, $query);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Chating friend shout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="datacss/style.css">
</head>
<body>

	<div id="container">
		<header>
		<h1>Chating friend shout</h1>	
		</header>
	
		<div id="shouts">
      <ul>
    <?php while ($row=mysqli_fetch_assoc($shouts)): ?>
            <li class="shout">
        <span><?php echo $row['time'];  ?> - </span><strong><?php echo $row['user'];  ?>:</strong> <?php echo $row['message'];  ?>
      </li>
    <?php endwhile; ?>
        </ul>
      </div>
		
	 <div id="input">
        <?php if (isset($_GET['error'])) : ?>
        <div class="error"><?php echo $_GET['error'];  ?></div>
  <?php endif; ?>
		<form method="post" action="process.php">
			<br>
		<input type="text" name="user" placeholder="Enter your name">
		<input type="text" name="message" placeholder="Enter your message">
		
		 <input class="shout-btn"type="submit" name="submit" value="Submit" />
		 <a class="btn btn-warning" href="#" role="button">Homepage</a>

	</form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>