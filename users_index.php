<?php
include_once "Models/UserModel.php";
$user = new User();

if(isset($_POST['export_data'])) {
    if(!empty($users)) {
        $filename = 'usuarios.xls';

        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$filename);
        $mostrar_columnas = false;

        foreach($users as $libro) {

            if(!$mostrar_columnas) {
                echo implode("\t", array_keys($libro)) . "\n";
                $mostrar_columnas = true;
            }

            echo implode("\t", array_values($libro)) . "\n";
        }

    }else{
        echo 'No hay datos a exportar';
    }
}

if(isset($_POST['user_delete'])) {
    $result = $user->deleteUser($_POST['_id']);
    if($result){
        echo "Usuario eliminado";
    }else {
        echo "Usuario no se eliminó";
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
            <div class="col-sm-12 ">
                <h2>USUARIOS</h2>
                <form style="display: inline;" action="users_index.php" method="post">
                    <button type="submit" name="export_data" class="btn btn-success btn-fix">Exportar a Excel</button>
                </form>
                <a href="user_create.php" class="btn btn-primary btn-fix"> Nuevo usuario</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12 text-center">
                <table class="table table-hover">
                    <thead>
                        <th class="text-center">Id</th>
                        <th class="text-center">Nombres</th>
                        <th class="text-center">Apellidos</th>
                        <th class="text-center">Ciudad</th>
                        <th class="text-center">Correo</th>
                        <th class="text-center">Telefono</th>
                        <th class="text-center">Fecha de Nacimiento</th>
                        <th class="text-center" colspan="2">Acciones</th>
                    </thead>
                    <tbody>
                        <?php foreach ($user->all() as $key => $user) { ?>
                            <tr>
                                <td><?php echo $user['_id'] ?></td>
                                <td><?php echo $user['nombres'] ?></td>
                                <td><?php echo $user['apellidos'] ?></td>
                                <td><?php echo $user['ciudad'] ?></td>
                                <td><?php echo $user['correo'] ?></td>
                                <td><?php echo $user['telefono'] ?></td>
                                <td><?php echo date("F j, Y",$user['fecha de nacimiento']) ?></td>
                                <td>
                                    <a href="user_edit.php?_id=<?php echo $user['_id'] ?>" class="btn btn-sm btn-primary">
                                        editar
                                    </a>

                                    <form style="display: inline;" action="users_index.php" method="post">
                                        <input type="hidden" name="_id" value="<?php echo $user['_id'] ?>">
                                        <button type="submit" name="user_delete" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </body>
    </html>
