<html>
	<head>
		<?php 
			include 'header.php';
			$var=$_GET['artid'];
			$art_data = "SELECT * FROM articles WHERE sno=$var";
			$dump = mysqli_query($con,$art_data);
			$res = mysqli_fetch_array($dump);
			$main_sno=$res['sno'];
			$related_art = "SELECT * FROM articles WHERE sno!=$main_sno ORDER BY sno DESC LIMIT 15";
			$dump1= mysqli_query($con,$related_art);
		?>
		<title> 
			<?php 
				if($res==TRUE)
				{
					echo $res['title'];
				}
				else
				{
					echo 'NO ARTICLES FOUND';
				}					
			?>
		</title>
	</head>
	
	<body>
		<br><br><br><br>
		<?php
			if($res==TRUE AND COUNT($dump1-1)>=1)
			{
				?>
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
						while($res=mysqli_fetch_array($dump1))
						{
							echo '<a class="col-xl-12" style="color:rgb(126, 207, 214); font-size:20px" href="article.php?artid='.$res['sno'].'">'.'<i class="fa fa-superpowers" aria-hidden="true">&nbsp'.$res['title'].'</i>'.'</a><br><br>';
						}
					?>
				</div>
				<?php
			}
			else if($res==TRUE AND COUNT($dump1-1)==0)
			{
				?>
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
					<p style="color:rgb(126, 207, 214); font-size:30px"><center>NO MORE ARTICLES!</center></p>
				</div>
				<?php
			}
			else
			{
				?>
					<div><center>
						<img class="img-responsive" src="images\article-not-found.gif">
						<p style="font-size:35px"><br><br><b><i>NO ARTICLES FOUND</i></b></p>
						</center>
					</div>
				<?php
			}
		?>
	</body>
	<br>
	<?php include 'footer.php';?>
</html>