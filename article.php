<html>
	<head>
		<?php 
			include 'header.php';
			$var=$_GET['artid'];
			$art_data = "SELECT * FROM articles WHERE sno=$var";
			$dump = mysqli_query($con,$art_data);
			$res = mysqli_fetch_array($dump);
		?>
		<title> <?php echo $res['title'] ?> </title>
	</head>
	
	<body>
		<br><br><br><br>
		<div class="col-lg-offset-1 col-lg-8 col-sm-8 col-md-8">
		
			<center><p style="font-size:40px; font-family:Bahnschrift Light"><b><?php echo $res['title'];?></b></p></center>
			<br><br>
			<img class="col-lg-12 img-responsive" src="<?php echo $res['image'];?>">
			<p style="text-align:justify; font-size:20px" class="col-lg-12"><br><br><?php echo $res['art_desc'];?></p>
			<br><br>
		</div>
		<div class="col-lg-3">
			<p><center><i>Related Articles</i></center></p>
			<hr><br>
			<?php
				$main_sno=$res['sno'];
				$related_art = "SELECT * FROM articles WHERE sno!=$main_sno ORDER BY sno DESC LIMIT 15";
				$dump= mysqli_query($con,$related_art);
				while($res=mysqli_fetch_array($dump))
				{
					echo '<a class="col-xl-12" style="color:rgb(126, 207, 214); font-size:20px" href="article.php?artid='.$res['sno'].'">'.'<i class="fa fa-superpowers" aria-hidden="true">&nbsp'.$res['title'].'</i>'.'</a><br><br>';
				}
			?>
		</div>
	</body>
	<br>
	<?php include 'footer.php';?>
</html>