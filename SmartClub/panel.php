<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "snooker");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
     
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	   // Get heading
  	$heading = mysqli_real_escape_string($db, $_POST['heading']);
	  // image file directory
  	$target = "tableimages/".basename($image);
  	$sql = "INSERT INTO tables(heading,image, image_text) VALUES ('$heading','$image', '$image_text')";
	  	/*$sql = "INSERT INTO images (image) VALUES ('$image')";*/
  	// execute query
  	mysqli_query($db, $sql);
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
if (isset($_POST['upload1'])) {
        // Get heading
  	$title = mysqli_real_escape_string($db, $_POST['title']);
      // Get text
  	$title_text = mysqli_real_escape_string($db, $_POST['title_text']);
	  $sql = "INSERT INTO tables1(title,title_text) VALUES ('$title','$title_text')";
		// execute query
  	mysqli_query($db, $sql);
}

/* $result = mysqli_query($db, "SELECT * FROM tables");*/
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>panel for insertion tables</title>

</head>

<body>
	<style type="text/css">
		#content {
			width: 50%;
			margin: 20px auto;
			border: 1px solid #cbcbcb;
		}

		form {
			width: 50%;
			margin: 20px auto;
		}

		form div {
			margin-top: 5px;
		}

		#img_div {
			width: 80%;
			padding: 5px;
			margin: 15px auto;
			border: 1px solid #cbcbcb;
		}

		#img_div:after {
			content: "";
			display: block;
			clear: both;
		}

		img {
			float: left;
			margin: 5px;
			width: 300px;
			height: 140px;
		}

	</style>
	<div id="content">
		<form method="POST" action="panel.php" enctype="multipart/form-data">
			<input type="hidden" name="size" value="1000000">
			<br>
			<fieldset class="fieldset-input">
				<legend align="center">
					<span class="span-legend">
						Main Heading
					</span>
				</legend>
				<div>

					Title:<input type="text" name="title">
				</div>
				<div>
					<textarea id="text" cols="40" rows="4" name="title_text" placeholder="write down some paraghraph about this ttitle..."></textarea>
				</div>
				<div>
					<button type="submit" name="upload1">UPLOAD</button>
				</div>
			</fieldset>
			<hr>
			<hr>
			<fieldset class="fieldset-input">
				<legend align="center">
					<span class="span-legend">
						Name Paraghraph and image uploading
					</span>
				</legend>
				<div>

					Heading:<input type="text" name="heading">
				</div>
				<div>
					<input type="file" name="image">
				</div>
				<div>
					<textarea id="text" cols="40" rows="4" name="image_text" placeholder="Say something about this image..."></textarea>
				</div>
				<div>
					<button type="submit" name="upload">UPLOAD</button>
				</div>
			</fieldset>
		</form>
		<form id="upload_form" name="upload_form" method="post" action="media_upload.php" enctype="multipart/form-data">
			<input type="file" id="upload_media" name="upload_media" accept="image/*" style="display:none">
		</form>
	</div>
</body>

</html>
