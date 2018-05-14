<?php
define('BASEPATH', true);
include_once "config.php";
include_once "sqldb.php";
include_once "mongodb.php";

$servername = "localhost";
$username = "root";
$password = "root";
$databaseName = "testdb";
$tableName = "usuarios_datos";

// createDatabaseMongo($databaseName,$tableName);

initSql(HOST, USER, PASSWORD, DB_NAME, DB_TABLE);

function initSql($servername,$username,$password,$databaseName,$tableName)
{
    $conn = getConectionSql($servername,$username,$password);
    createDatabaseSql($conn,$databaseName);
    closeConectionSql($conn);

    $conn = getConectionSql($servername,$username,$password,$databaseName);
    createTableSql($conn,$tableName);


    $users = [
        ['_id' => '1','nombres' => 'Neil','apellidos' => 'Esteves Rosales','ciudad' => 'Lima', 'correo' => 'neil@mail.com', 'telefono' => 922462556, 'fecha de nacimiento' => '1992-09-07'],
        ['_id' => '2','nombres' => 'Liz','apellidos' => 'Sotelo Quiroz','ciudad' => 'Lima', 'correo' => 'liz@mail.com', 'telefono' => 123456789, 'fecha de nacimiento' => '1992-01-10'],
        ['_id' => '3','nombres' => 'Carlos','apellidos' => 'Quispe','ciudad' => 'Lima', 'correo' => 'carlos@mail.com', 'telefono' => 123456781, 'fecha de nacimiento' => '1993-02-15'],
        ['_id' => '4','nombres' => 'karen','apellidos' => 'Beizaga Neyra','ciudad' => 'Lima', 'correo' => 'karen@mail.com', 'telefono' => 123456782, 'fecha de nacimiento' => '1995-03-20'],
        ['_id' => '5','nombres' => 'Raul','apellidos' => 'Hinostroza','ciudad' => 'Lima', 'correo' => 'raul@mail.com', 'telefono' => 123456783, 'fecha de nacimiento' => '1994-04-21'],
        ['_id' => '6','nombres' => 'Miriam','apellidos' => 'Contreras Blanca','ciudad' => 'Lima', 'correo' => 'miriam@mail.com', 'telefono' => 123456784, 'fecha de nacimiento' => '1991-05-14'],
        ['_id' => '7','nombres' => 'Oscar','apellidos' => 'Alanya Romero','ciudad' => 'Lima', 'correo' => 'oscar@mail.com', 'telefono' => 123456785, 'fecha de nacimiento' => '1990-06-03'],
        ['_id' => '8','nombres' => 'kelly','apellidos' => 'Idrogo Ipanaque','ciudad' => 'Lima', 'correo' => 'kelly@mail.com', 'telefono' => 123456786, 'fecha de nacimiento' => '1993-07-02'],
        ['_id' => '9','nombres' => 'Luis','apellidos' => 'Taipe Ruiz','ciudad' => 'Lima', 'correo' => 'luis@mail.com', 'telefono' => 123456787, 'fecha de nacimiento' => '1992-08-01'],
        ['_id' => '10','nombres' => 'Jennifer','apellidos' => 'Lombardy Mamani','ciudad' => 'Lima', 'correo' => 'jennifer@mail.com', 'telefono' => 123456788, 'fecha de nacimiento' => '1993-10-28'],
    ];

    foreach ($users as $key => $user) {
        insertSql($conn,$tableName,$user);
    }
    closeConectionSql($conn);
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
            <div class="col-sm-6">
                <br>
                <a href="users_index.php" class="btn btn-primary">Ir a Usuarios</a>
            </div>
        </div>
    </div>
</body>
</html>
