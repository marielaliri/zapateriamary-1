<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="imagenes/zap.png" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.css">

	<title>Formulario</title>
<style>
body {
	background-size: cover;
    background-repeat: no-repeat;
    background-position: top center;
    background-attachment: fixed;
    display: flex;
}

[type = "submit"] {
	width: 100%;
}
form{
	margin: 25px;
	padding: 15px;
    box-sizing: border-box;
    background: rgba(0, 0, 0, .2);
    box-shadow: 10px 10px 30px -6px #000;
    border-radius: 15px;
    border: 1px solid black;
}
 #cuenta{
 	cursor: pointer;
 	text-decoration-line: none;
 	text-align: center;
 	 }

 #cuenta:hover{
 	text-decoration-line: underline;
 	color: blue;
 }

 h5{
 	text-align: center;
 }
 h2{
 	text-align: center;
 }


</style>
	
</head>
<body background="imagenes/images.jpg">

<div class="container-fluid">
	<div class="row">
		<div class="col-4">
		</div>
		<div class="col-4">

			<form>

			<center><img style= "width: 110px;" src="imagenes/zap.png"> Perú</center>


			<h2>MI CUENTA</h2><br>
					<div class="form-group">

						<labelEmail for="email">Iniciar el Correo</label>
						<input type="email" name="email" placeholder="Ingrese correo" class="form-control">
					</div>

					<div class="form-group">
						<labelEmail for="email">Contraseña</label>

						<input type="Password" name="Password" placeholder="Ingrese Contraseña" class="form-control">
					</div>
			<div class="form-group form-check">

				<label class="form-check-label">
					<input class="form-check-input" type="checkbox">Guardar Contraseña</label>
			</div>

			<div>
				<button type="submit" class="btn-success">Iniciar  Secion</button>
			</div> <hr>

			<div>
			<button type="submit" class="btn-primary">Continuar Facebook</button>

			</div><br>
			<h5>¿No tiene Una Cuenta?</h5>
			<center><a id="cuenta" title="Crear una cuenta">Crear Una Cuenta</a></center>
			</form>		

		</div>
		<div class="col-4">
		</div>
	</div>
</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>