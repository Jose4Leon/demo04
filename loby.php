<?php
    session_start();
    include ('conexion.php');
    if(isset($_SESSION['usuario'])){
    header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Panel</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    	
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
                        <h3><center>Bienvenidos</center></h3>
				        <br>
                        <form>
                            <a class="btn-lg btn-success btn-block" type="button" href="listatrab.php"><center>Trabajadores</center></a>

                            <a class="btn-lg btn-success btn-block" type="button" href="listapar.php"><center>Participantes</center></a>

                            <a class="btn-lg btn-danger btn-block" type="button" href="logout.php"><center>Cerrar Sesion</center></a>

                        </form>
					</div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>			
		
	</body>
</html>
<?php
}
else{
echo '<script>window.location="index.php"; </script>';
}
$profile=$_SESSION['usuario'];
?>
