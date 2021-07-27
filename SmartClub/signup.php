<?php
$conn   = mysqli_connect("localhost","root","","snooker");
// REGISTER USER
if (isset($_POST['signup'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phoneno = $_POST['phoneno'];
	$pass= $_POST['pass'];
	$confrimpass = $_POST['confrimpass'];
	
	  
		$query= "insert into signup (name, email, address, phoneno , pass, confrimpass) values ('$name','$email','$address','$phoneno','$pass','$confrimpass')";
		if(mysqli_query($conn,$query))
			{
				echo "<script>alert('SignUP successfully done...!')</script>";
				echo "<script>window.open('login.php','_self')</script>";
			} else
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        		}
	 
}
?>


<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SignUp </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	#login {
		-webkit-perspective: 1000px;
		-moz-perspective: 1000px;
		perspective: 1000px;
		margin-top: 35px;
		margin-left: 30%;
	}

	.login {
		font-family: 'Josefin Sanas', sans-serif;
		-webkit-transition: .3s;
		-moz-transition: .3s;
		transition: .3s;
		-webkit-transform: rotateY(40deg);
		-moz-transform: rotateY(40deg);
		transform: rotateY(40deg);
	}

	.login:hover {
		-webkit-transform: rotate(0);
		-moz-transform: rotate(0);
		transform: rotate(0);
	}

	.login article {}

	.login .form-group {
		margin-bottom: 17px;
	}

	.login .form-control,
	.login .btn {
		border-radius: 0;
	}

	.login .btn {
		text-transform: uppercase;
		letter-spacing: 3px;
	}

	.input-group-addon {
		border-radius: 0;
		color: #fff;
		background: #f3aa0c;
		border: #f3aa0c;
	}

	.forgot {
		font-size: 16px;
	}

	.forgot a {
		color: #333;
	}

	.forgot a:hover {
		color: #5cb85c;
	}

	#inner-wrapper,
	#contact-us .contact-form,
	#contact-us .our-address {
		color: #1d1d1d;
		font-size: 19px;
		line-height: 1.7em;
		font-weight: 300;
		padding: 50px;
		background: #fff;
		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		margin-bottom: 100px;
	}

	.input-group-addon {
		border-radius: 0;
		border-top-right-radius: 0px;
		border-bottom-right-radius: 0px;
		color: #fff;
		background: #f3aa0c;
		border: #f3aa0c;
		border-right-color: rgb(243, 170, 12);
		border-right-style: none;
		border-right-width: medium;
	}

</style>

<body style="background-image: url('services.jpg');">
	<?php
    include('header.php');
    ?>
	<div class="col-md-4 col-md-offset-4" id="login">

		<section id="inner-wrapper" class="login" style="background-image: url('snooker.jpg');">
			<article>
				<form action="" method="post" name="signup">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"> </i></span>
							<input type="text" class="form-control" placeholder="Name" name="name" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
							<input type="email" class="form-control" placeholder="Email" name="email" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
							<input type="address" class="form-control" placeholder="Address" name="address" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-key"> </i></span>
							<input type="text" class="form-control" placeholder="PhoneNo:" name="phoneno" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-key"> </i></span>
							<input type="password" class="form-control" placeholder="Password" name="pass" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-key"> </i></span>
							<input type="password" class="form-control" placeholder="Confirm Password" name="confrimpass" required>
						</div>
					</div>


					<button type="submit" class="btn btn-success btn-block" name="signup">Submit</button>
				</form>
			</article>
		</section>
		<!-- Footer -->
		<footer class="page-footer font-small blue">

			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">©2019 CopyRight:
				<a href="https://www.facebook.com/profile.php?id=100004360907706">Fayzan Bhatti</a>
			</div>
			<!-- Copyright -->

		</footer>
		<!-- Footer -->
	</div>

</body>

</html>
