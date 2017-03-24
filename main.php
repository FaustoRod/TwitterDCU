<?php
	session_start();
?>
<!DOCTYPE html>
<html>

	<head>
		<title>Main</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="test.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>

	<body>
		<header>
			<div class="header-main container-fluid">
				<div class="header-item main-user">
					<img src="assets/avatar.png" style="width:100px;height:100%;margin:auto;border-radius:20px;border:1px solid white;cursor: pointer;">
					
				</div>

				<div class="header-item">
					<h1 style="cursor: pointer;">FreePost</h1>
				</div>

				<div class="header-item">
					<form action="" method="post">
						<button class="btn btn-default" type="submit" name="btnlogout" style="float:right; margin-top:65px; background:transparent;color:white;border:1px solid white;">Log Out</button>
					</form>
				</div>
			</div>
		</header>
		
		<div class="main-cont">
			<form action="main.php" method="post" style="margin:10px auto; width:80%; border:3px solid gray; padding:20px;border-radius:10px; box-shadow:0px 5px 25px 2px #888888;">
				<textarea name="comentario" placeholder="  Dile el mundo lo que piensas.... pero no mas de 300 caracteres" maxlength="120" style="width:100%;height:100px;border:1px solid gray;border-radius:10px;font-size:20px;"></textarea>
				<button type="submit" name="btnpost" class="btn btn-default" style="float:right;width:100px;">Post!</button>
			</form>
			<div class="section-comentario">
				<div class="comentario-box">
			<div class="comentario-top">
				<div class="comentario-img">
					<img src="assets/avatar.png" style="width:100%;height:100%;border-radius:inherit;">
				</div>
				
				<div class="comentario-user">
					<div class="user-item">
						<h3>Juan Pere</h3>
					</div>
					
					<div class="user-item">
						<h3>ElReal</h3>
					</div>
				</div>
			</div>
			<div class="comentario-contenido">
				<div class="contenido">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec erat erat. In fringilla ut nibh et sagittis. Nam	
				</div>
			</div>
			<div class="comentario-reply">
				<a class="btn btn-primary">Reply</a>
			</div>
			<div class="panel-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#respuestas">Comentarios</a>
						</h4>
					</div>
					<div id="respuestas" class="panel-collapse collapse">
						
					</div>
				</div>
			</div>		
		</div>
				
				<div class="comentario-box">
			<div class="comentario-top">
				<div class="comentario-img">
					<img src="assets/avatar.png" style="width:100%;height:100%;border-radius:inherit;">
				</div>
				
				<div class="comentario-user">
					<div class="user-item">
						<h3>Juan Pere</h3>
					</div>
					
					<div class="user-item">
						<h3>ElReal</h3>
					</div>
				</div>
			</div>
			<div class="comentario-contenido">
				<div class="contenido">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec erat erat. In fringilla ut nibh et sagittis. Nam	
				</div>
			</div>
			<div class="comentario-reply">
				<a class="btn btn-primary">Reply</a>
			</div>
			<div class="panel-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#respuestas">Comentarios</a>
						</h4>
					</div>
					<div id="respuestas" class="panel-collapse collapse">
						
					</div>
				</div>
			</div>		
		</div>
			</div>
		</div>
		
		<script type="text/javascript" src="JavaScript/javascript.js"></script>
		<script type="text/javascript" src="JavaScript/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="JavaScript/bootstrap.min.js"></script>
	</body>

</html>