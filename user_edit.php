<?php
include_once "Models/UserModel.php";
$user = new User();

if($_SERVER['REQUEST_METHOD'] == 'GET' ){
    if(!empty($_GET['_id'])){
        $user = $user->getUser($_GET['_id']);
        if (!$user) {
            header("Location: users_index.php");
        }
    }else {
        header("Location: users_index.php");
    }
}elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST) && !empty($_POST)){
        $result = $user->updateUser($_POST['_id'],$_POST['nombres'],$_POST['apellidos'],$_POST['ciudad'],$_POST['correo'],$_POST['telefono'],$_POST['fecha']);
        if($result){
            header("Location: users_index.php");
        }else {
            echo "No se actualizó usuario";
            $id = $_POST['_id'];
            header("Location: users_edit.php?_id=$id");
        }
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
                <form action="user_edit.php" method="post">
                    <input type="hidden" name="_id" value="<?php echo $user['_id'] ?>">
                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input name="nombres" class="form-control" id="name" placeholder="Nombres" value="<?php echo $user['nombres'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input name="apellidos" class="form-control" id="last_name" placeholder="Apellidos" value="<?php echo $user['apellidos'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="ciudad">Ciudad</label>
                        <input name="ciudad" class="form-control" id="city" placeholder="Ciudad" value="<?php echo $user['ciudad'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input name="correo" class="form-control" id="email" placeholder="Correo" value="<?php echo $user['correo'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input name="telefono" class="form-control" id="telephone" placeholder="Teléfono" value="<?php echo $user['telefono'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha de Nacimiento</label>
                        <input name="fecha" class="form-control" id="date" placeholder="names" type="date" value="<?php echo date("Y-m-d",$user['fecha de nacimiento'])  ?>" required>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn btn-primary" name="update">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
