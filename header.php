<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<link rel="icon" type="image/png" href="images/logo.png">
	<div class="topnav" id="myTopnav">
	  <a href="index.php"><b>INDUCE</b></a>
	  <a class="w3-right" href="#contact_details">Contact</a>
	  <a class="w3-right" href="about.php">About</a>
	  <?php 
		date_default_timezone_set("Asia/Kolkata");
		error_reporting(E_ERROR | E_PARSE);
		$con = mysqli_connect("localhost","root","","induce");
		$art="SELECT * FROM articles ORDER BY sno DESC LIMIT 1";
		$check=mysqli_query($con,$art);
		$res=mysqli_fetch_array($check);
	  ?>
	<?php
		if($res==TRUE)
		{
			?>
			<a class="w3-right" href="article.php?artid=<?php echo $res['sno'];?>">Articles</a>
			<?php
		}
		else
		{
			?>
			<a class="w3-right" href="article.php?<?php echo 'NO ARTICLES FOUND';?>">Articles</a>
			<?php
		}
	?>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>
	  </a>
	</div>
	<script>
		function myFunction() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
			x.className += " responsive";
		  } else {
			x.className = "topnav";
		  }
		}
	</script>
</head>