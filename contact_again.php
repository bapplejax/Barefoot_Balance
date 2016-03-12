<?php
	if ($_POST["submit"]) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Demo Contact Form';
		$to = 'jake.bapple@gmail.com,aaron@wsioutdoor.com';
		$subject = 'Message from WSI Outdoor Page';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>WSI Outdoor South Central USA</title>
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="css/landing-page.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/contact.css" rel="stylesheet">
		<!-- Custom Fonts -->
		<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="img/wsilogo_favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/wsilogo_favicon.ico" type="image/x-icon">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="contact-page">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">WSI Outdoor</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="index.php#brands">Our Brands</a>
						</li>
						<li>
							<a href="index.php#team">Our Team</a>
						</li>
						<li>
							<a href="index.php#showroom">Our Showroom</a>
						</li>
						<li>
							<a href="da.php">Dealer Access</a>
						</li>
						<li>
							<a href="contact.php">Contact</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
		<!-- Header -->
		<div class="intro-header img-responsive">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="container contact">
							<div class="row">
								<div class="col-sm-4 contentbox">
									<h4>Drop us a line!</h4>
									<hr>
									<address>
										<p>Are you looking to carry one of our lines?</p>
										<p>Do you need support for a clinic or event?</p>
										<p>Just let us know, and we're glad to help!</p>
										<br><br>
										<strong>Phone:</strong> (208) 484-8538
									</address>
								</div>
								
								
								<div class="col-sm-8 contact-form">
									<form class="form-horizontal" role="form" method="post" action="contact_again.php">
										<div class="form-group">
											<label for="name" class="col-sm-2 control-label">Name</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
												<?php echo "<p class='text-danger'>$errName</p>";?>
											</div>
										</div>
										<div class="form-group">
											<label for="email" class="col-sm-2 control-label">Email</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
												<?php echo "<p class='text-danger'>$errEmail</p>";?>
											</div>
										</div>
										<div class="form-group">
											<label for="message" class="col-sm-2 control-label">Message</label>
											<div class="col-sm-10">
												<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
												<?php echo "<p class='text-danger'>$errMessage</p>";?>
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-10 col-sm-offset-2">
												<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-10 col-sm-offset-2">
												<?php echo $result; ?>
											</div>
										</div>
									</form>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<!-- /.container -->
			</div>
			<!-- /.intro-header -->
			<!-- Page Content -->
			<!-- /.banner -->
		</div>
		<!-- Footer -->
		<footer class="contact_footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="list-inline">
							<li>
								<a href="http://www.wsioutdoor.com/">Home</a>
							</li>
							<li class="footer-menu-divider">&sdot;</li>
							<li>
								<a href="index.html#brands">Our Brands</a>
							</li>
							<li class="footer-menu-divider">&sdot;</li>
							<li>
								<a href="index.html#team">Our Team</a>
							</li>
							<li class="footer-menu-divider">&sdot;</li>
							<li>
								<a href="#contact">Contact</a>
							</li>
						</ul>
						<p class="copyright text-muted small">Copyright &copy; Windom Sales Incorporated 2014. All Rights Reserved</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- jQuery Version 1.11.0 -->
		<script src="js/jquery-1.11.0.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>