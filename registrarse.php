<?php
session_start();
include ('conexion.php');
if (isset($_SESSION['user'])){
echo '<script>window.location="loby.php"; </script>';
}
?>
<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/bootstrap.min.js"></script>
    <title>Registrar</title>
</head>
<body>
            <div class="container">
				<!>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-4">
                        <h3><center>REGISTRO</center></h3>
				        <br>
						<!-- formulario metodo post se dirige a valida.php-->
				        <form method="POST" action="guardar.php">
                            <fieldset>
                                <div class="form-group">
                                    <label for="usuario" class="form-label">Indique usuario</label><br>
                                    <input 
                                        type="text" 
                                        id="usuario" 
                                        name="usuario" 
                                        required
                                        placeholder="Indique aqui el usuario"
                                        maxlength="50"
                                        class="form-control"
                                        title="Completar el usuario"
                                        tabindex="1"/><br>
                                </div>
                                <div class="form-group">
                                    <label for="clave"  class="form-label">Indique clave de usuario</label><br>
                                    <input 
                                        type="text" 
                                        id="clave" 
                                        name="clave" 
                                        required
                                        placeholder="Indique aqui la clave del usuario"
                                        maxlength="50"
                                        class="form-control"
                                        title="Completar la clave"
                                        tabindex="2"/><br>                                                            
                                </div>
                                
                                <input type="submit" value="Registrar" name="registro" class="btn btn-primary"/></br>
									Si ya tienes una cuenta ingresa <a href="index.php"> aqui </a>
                            </fieldset>
						</form>
					</div>
                    <div class="col-md-4">                     
                    </div>
                </div>
            </div>			
		
	</body>
</html>