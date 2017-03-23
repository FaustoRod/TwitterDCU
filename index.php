<?php
	session_start();
?>
<!DOCTYPE html>
<html>

	<head>
		<title>FreePost</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>

	<body>
		<header>
			<div class="header-main container-fluid">
				<div class="header-item">
				</div>

				<div class="header-item">
					<h1>FreePost</h1>
				</div>

				<div class="header-item">
				</div>
			</div>
		</header>
		<div class="index-main-cont">
				<div class="index-cont-item">
					<div id="index-img" style="width:100%;height:100%;">
						<img class="img-responsive" src="assets/pic.jpg" style="width:100%;height:100%; filter:grayscale(100%);border-bottom-left-radius:5px; border-top-left-radius:5px;">
					</div>
				</div>
			
				<div class="index-cont-item index-login">
					<div id="title-login">
						<h1>Log In</h1>
					</div>
					<div class="form-cont">
						<form action="index.php" method="post">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="user" name="user" value="" type="text" class="form-control" placeholder="Usuario">
							</div>
							
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="pass" name="pass" type="password" class="form-control" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-default btn-block" name="login">LogIn</button>
						</form>
					</div>
					<div id="signup-text-cont">
						<p>Don't have an account <a href="registrarse.php">Sign up!</a></p>
					</div>
				</div>	
		</div>
		<script type="text/javascript" src="JavaScript/javascript.js"></script>
		<script type="text/javascript" src="JavaScript/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="JavaScript/bootstrap.min.js"></script>
	</body>

</html>
