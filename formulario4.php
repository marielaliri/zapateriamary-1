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
	width: 50%;
}
form{
	margin: 20px;
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
 span{
 	padding: 10px;
 }
iframe{
	margin: 20px;
    
    box-shadow: 10px 10px 30px -6px #000;
    border-radius: 15px;
    border: 1px solid black;

</style>	
</head>
<body background="imagenes/Raining_by_ipapun.jpg">

<div class="container-fluid">

	<center><div class="col product"><img style="width: 150px;" src="imagenes/zap.png" class="rounded-circle" alt="Cinque Terre"></div></center><br>
		   
	<div class="row">
		<div class="col-6">

					

<form>

<div class="input-group mb-3">
    <div class="input-group-prepend">
     	 <span>Nombre</span>
    </div>

    <input type="text" class="form-control" placeholder="Nombre"><br>
    <span></span>
    <input type="text" class="form-control" placeholder="Apellido">
 </div>



<div class="input-group-prepend">
		<span>Sexo &nbsp; &nbsp; &nbsp;</span>
  					<select class="form-control" id="sel1">
  					<option>*Seleccionar*</option>
    				<option>Mujer</option>
    				<option>Voron</option>
					</select>
</div>


<div class="input-group-prepend">
 		<label for="sel1">Ocupación &nbsp; </label>
  					<select class="form-control" id="sel1">
  					<option>*Seleccionar*</option>
    				<option>1</option>
    				<option>2</option>
    				<option>3</option>
    				<option>4</option>
					</select>
</div><br>

		
<div class="input-group-prepend">
 					<label for="sel1">Consulta &nbsp; &nbsp; &nbsp; </label>
  					<select class="form-control" id="sel1">
  					<option>*Seleccionar*</option>
    				<option>Privado</option>
    				<option>Público</option>
					</select>
</div>

<div class="form-group">

					<labelEmail for="email">Iniciar el Correo</label>
					<input type="email" name="email" placeholder="Ingrese correo" class="form-control">
</div>



<div class="form-group">

  					<label for="comment">Comment:</label>
 		 			<textarea class="form-control" rows="5" id="comment"></textarea>
</div>


		<label>¿le guataria ser contactado telefonicamente?</label>	


<div class="form-check">
  					<label class="form-check-label">
    				<input type="checkbox" class="form-check-input" value="">Si
  					</label>
</div>



<div class="form-check">
  					<label class="form-check-label">
    				<input type="checkbox" class="form-check-input" value="">No
  					</label>
</div>

<div class="input-group mb-3">
	    			<div class="input-group-prepend">
	      				<span>Tefono</span>
	    			</div>

	    		
	    			<input type="text" class="form-control" placeholder="##"><br>
	    			<span></span>
	    			<input type="text" class="form-control" placeholder="###">
					<span></span>
	    			<input type="text" class="form-control" placeholder="###">

  </div>

	<div>
					<center><button type="submit" class="btn-block">Enviar Formulario De Cosulta</button></center>
	


	</form>		


	</div>
    </div><br>

        	<div class="col-6">		
		    		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6672.900734950023!2d-76.97633178664778!3d-6.0316746092389995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91b73b037b043e81%3A0xa679b40ffb654e28!2sMarcoantonio!5e0!3m2!1ses-419!2spe!4v1531782189913" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		   			<center><a class="btn btn-secondary" href="index.php">Regresar a la página Principal</a> </center>
		    </div>
	</div>
</div>



<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>