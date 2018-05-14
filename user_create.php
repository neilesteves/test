<?php

if(isset($_POST) && !empty($_POST)){
    include_once "Models/UserModel.php";
    $user = new User();
    $result = $user->createUser($_POST['nombres'],$_POST['apellidos'],$_POST['ciudad'],$_POST['correo'],$_POST['telefono'],$_POST['fecha']);
    if($result){
        header("Location: users_index.php");
    }else {
        echo "No se registró usuario";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>
    <link rel="stylesheet" href="assets\css\bootstrap-3.3.7.min.css">
    <link rel="stylesheet" href="assets\css\styles.css">
</head>
<body>
    <div class="container container-fluid" id="content" tabindex="-1">
        <div class="row">
            <div class="col-sm-12">
                <h2>Registro de Usuario</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <form action="user_create.php" method="post">
                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input name="nombres" class="form-control" id="name" placeholder="Nombres" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input name="apellidos" class="form-control" id="last_name" placeholder="Apellidos" required>
                    </div>
                    <div class="form-group">
                        <label for="ciudad">Ciudad</label>
                        <input name="ciudad" class="form-control" id="city" placeholder="Ciudad" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input name="correo" class="form-control" id="email" placeholder="Correo" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input name="telefono" class="form-control" id="telephone" placeholder="Teléfono" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha de Nacimiento</label>
                        <input name="fecha" class="form-control" id="date" placeholder="names" type="date" required>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn btn-primary" name="register">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
