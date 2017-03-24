<!DOCTYPE html>
<html>

	<head>
		<title>FreePost</title>
		<meta name="viewport" content="width:device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	</head>

	<body id="pagReg">
		<header>
			<div class="header-main">
				<div class="header-item">
				</div>
				<div class="header-item">
					<h1>FreePost</h1>
				</div>
				<div class="header-item">
				</div>
			</div>
		</header>
    <br>
    <br>
    <div class="container">
      <div class="text-center">
        <h3><strong>Ingrese sus datos para el registro</strong></h3>

      </div>
      <form class="tamForm" enctype="multipart/form-data" action="dbDatosReg.php" method="post" id="formReg">

					<div class="form-group">
						<label for="Nombre">Nombre:</label>
						<input autofocus required class="form-control"  placeholder="Ingrese Su Nombre" name="nombreReg" id="nombreReg">

					</div>

        <div class="form-group">
          <label for="Apellido">Apellido:</label>
          <input required class="form-control" placeholder="Ingrese Su Apellido" name="apellidoReg" id="apellidoReg">
        </div>

        <div class="form-group">
          <label for="Correo">Correo:</label>
          <input required class="form-control" placeholder="Ingrese Su Correo" name="correoReg" id="correoReg">
        </div>

				<div class="form-group">
          <label for="Usuario">Usuario</label>
          <input required class="form-control" placeholder="Ingrese nombre de usuario" name="usuarioReg" type="text" id="usuarioReg">
        </div>

        <div class="form-group">
          <label for="Contraseña">Contraseña:</label>
          <input required class="form-control"  placeholder="Ingrese Su Contraseña" name="passReg" id="passReg">
        </div>

        <div class="form-group">
          <label for="fotoPerfil">Foto de Perfil:</label>
          <input onchange="prevImg(this);" required class="form-control" placeholder="Suba su foto de Perfil" name="fotoPerfil" type="file" id="fotoPerfil">
        </div>


        <div class="form-group">
          <button class="btn btn-primary" name="btnReg" id="btnReg" type="submit">Registrarse</button>
        </div>

        <div class="imgPreview">
          <img class="img-thumbnail" src="" alt="Imagen Preview" id="imgPreview" >
        </div>




      </form>
    </div>






		<script type="text/javascript" src="JavaScript/javascript.js"></script>
		<script type="text/javascript" src="JavaScript/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="JavaScript/bootstrap.min.js"></script>
	</body>

</html>
