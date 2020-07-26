	<html>
		<head>
			<title> Article Publish </title>
			<?php
				include 'adminheader.php';
			?>
			
		</head>
		
		<body>
				<br><br><br><br>
				<center><p style="font-size:30px">Article Publish
				</p></center>
				<br><br>
				<div class="col-xl-8 col-xl-offset-2col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
					<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
						<div class="form-group">
							<input type="text" class="form-control" name="title" placeholder="What's the Title?">
							<br><br>
							<label> Image </label> <input type="file" name="img">
							<br><br>
							<textarea rows="10" cols="10" name="art_desc" placeholder="Description..." style="resize:none" class="form-control"></textarea>
							<br><br>
							<center><input type="submit" class="button" name="publish" value="Publish"></center>
							<br><br>
						</div>
					</form>
				</div>
				<?php
					if(isset($_POST['publish']))
					{
						$title = $_POST['title'];
						$file_name = $_FILES['img']['name'];
						$tmp_name = $_FILES['img']['tmp_name'];
						$path="./images/".$file_name;
						move_uploaded_file($tmp_name,$path);
						$desc_article = $_POST['art_desc'];
						$date_curr=date("Y-m-d");
						$time_curr=date("h:i:sa");
						$data = "INSERT INTO articles(date,time,title,image,art_desc) VALUES('$date_curr','$time_curr','$title','$path','$desc_article')";
						$res = mysqli_query($con,$data);
					}
				?>
		</body>
		<br>
		
		<?php include 'footer.php';?>
		
	</html>

