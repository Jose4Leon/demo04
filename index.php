<?php
session_start();
include ('conexion.php');
if (isset($_SESSION['user'])){
	//Abrir el panel.php
echo '<script>window.location="loby.php"; </script>';
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>DEMO 04</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
            <div class="container">
				<!>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-4">
                        <h3><center>LOGIN</center></h3>
				        <br>
						<!-- formulario metodo post se dirige a valida.php-->
				        <form method="post" action="valiadar.php">
							<!-- div agrupar elementos de formulario -->
                            <div class="form-group">
				            <input type="text" name="usuario" value="" placeholder="Usuario" class="form-control"/><br>
				            <input type="password" name="clave" value="" placeholder="Password" class="form-control"/><br>
				            <footer>
				                    <input type="submit" value="Ingresar" name="login" class="btn btn-primary"/></br>
									Si no tienes una cuenta registrate <a href="registrarse.php"> aqui </a>
				            </footer>
				            </div>
						</form>
					</div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>			
		
	</body>
</html>
