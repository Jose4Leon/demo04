<?php
    include('conexion.php');  
?>
<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/bootstrap.min.js"></script>
    <title>Registrar participante</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-3">
            <h3>Registro creado</h3>
            <?php 
                $n = $_POST["nombre"];
                $a = $_POST["apellido"];
                $d = $_POST["date"];
                $c = $_POST["correo"];
                $s = $_POST["sexo"];
                if ($s == 1){
                    $s = "Masculino";
                }elseif ($s == 2){
                    $s = "Femenino";
                }
                
                $e = $_POST["estado"];
                if ($e == 1){
                    $e = "Soltero";
                }elseif ($e == 2){
                    $e = "Casado";
                }elseif ($e == 3){
                    $e = "Viudo";
                }elseif ($e == 4){
                    $e = "Divorciado";
                }

                $instruccionSQL = $db->prepare("INSERT INTO participantes(nom,ape,fechna,cor,sex,est) VALUES(?,?,?,?,?,?)");
                $instruccionSQL->execute(array($n,$a,$d,$c,$s,$e));
                echo "<h4>". $n ." " .$a ."</h4>";
                echo "<h5>" . $d ." " .$c ."</h5>";
                echo "<h5>" . $s ."</h5>";
                echo "<h5>" . $e ."</h5>";
                echo "Datos registrados" ."<br>";
            ?>
            <a href="listapar.php" class="btn btn-primary">Lista de registro</a> <br>            
            </div>
            <div class="col-md-3">
                
            </div>
        </div>
    </div>
    
</body>
</html>