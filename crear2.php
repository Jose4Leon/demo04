<?php
    include('conexion.php');    
?>

<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nuevo participante</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function validar(f){
            var todo_correcto = true;

            if (document.getElementById('nombre').value.length < 2){
                alert("Nombre no debe tener menos de 1 caracter");
                todo_correcto = false;
            }

            if (document.getElementById('apellido').value.length < 2){
                alert("Apellido no debe tener menos de 1 caracter");
                todo_correcto = false;
            }

            if (document.getElementById('correo').value.length < 2){
                alert("Correo no debe tener menos de 1 caracter");
                todo_correcto = false;
            }

            if (todo_correcto){
                if(confirm("Desea guardar los registros")){
                    return todo_correcto;
                }else{
                    todo_correcto = false;
                    return todo_correcto;
                }            
            }    
            else{
                alert("Algunos campos no estan correctos, vuelva a revisarlos");
                todo_correcto = false;
                return todo_correcto;
            }
        }
        
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <h1>Nuevo registro</h1>
                <form method="POST" action="registrarpar.php" onsubmit='return validar(this)'>
                    <fieldset>
                        <legend>Registro</legend>
                        <div class="form-group">
                            <label for="nombre" class="form-label">Indique su nombre</label><br>
                            <input 
                                type="text" 
                                id="nombre" 
                                name="nombre" 
                                required
                                placeholder="Indique aqui su nombre"
                                maxlength="50"
                                class="form-control"
                                title="Completar el nombre"
                                tabindex="1"/><br>
                        </div>
                        <div class="form-group">
                            <label for="apellido"  class="form-label">Indique su apellido</label><br>
                            <input 
                                type="text" 
                                id="apellido" 
                                name="apellido" 
                                required
                                placeholder="Indique aqui su apellido"
                                maxlength="50"
                                class="form-control"
                                title="Completar el apellido"
                                tabindex="2"/><br>                                                            
                        </div>
                        <div class="form-group">
                            <label for="date"  class="form-label">Indique su fecha de nacimiento</label><br>
                            <input 
                                type="date" 
                                id="date" 
                                name="date" 
                                required
                                placeholder="Indique aqui su fecha de nacimiento"
                                maxlength="50"
                                class="form-control"
                                title="Completar la fecha"
                                tabindex="3"/><br>                                                            
                        </div>                    
                        <div class="form-group">
                            <label for="correo"  class="form-label">Indique su correo electronico</label><br>
                            <input 
                                type="email" 
                                id="correo" 
                                name="correo" 
                                required
                                placeholder="Indique su correo electronico"
                                maxlength="50"
                                class="form-control"
                                title="Completar el correo"
                                tabindex="4"/><br>
                        </div>
                        <div class="form-group">
                                <label for="sexo"  class="form-label">Seleccione su sexo: </label><br>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo" id="customsexo1" value="1">
                                <label class="form-check-label" for="customsexo1">
                                    Masculino
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo" id="customsexo2" value="2">
                                <label class="form-check-label" for="customsexo2">
                                    Femeninno
                                </label>
                                </div></br>
                        </div>

                        <div class="form-group">
                            <label for="estado"  class="form-label">Indique su estado actual: </label><br>
                            <select class="custom-select" id="estado" name="estado">
                                <option selected>Estado civil...</option>
                                <option value="1">Soltero</option>
                                <option value="2">Casado</option>
                                <option value="3">Viudo</option>
                                <option value="4">Divorciado</option>
                            </select><br>
                        </div>
                        
                        <input type="submit" value="Registrar" name="registro" class="btn btn-primary"/>
                        <a href="loby.php" class="btn btn-success">Lista de registro</a> 
                    </fieldset>
                    
                </form>
                
            </div>

            <div class="col-md-3">

            </div>
        </div>
    </div>
    
</body>
</html>