<?php

function getConectionSql($servername, $username, $password,$databaseName = null)
{
    $conn = new mysqli($servername, $username, $password, $databaseName);
    // $conn = new mysqli(HOST, USER, PASSWORD, DB_NAME);
    if ($conn->connect_error) {
        die("\Error en la conexión: " . $conn->connect_error);
    }

    return $conn;
}


function closeConectionSql($conn = null)
{
    if($conn){
        $conn->close();
    }
}

function createDatabaseSql($conn, $databaseName)
{
    $query = "CREATE DATABASE IF NOT EXISTS $databaseName";

    if ($conn->query($query) === TRUE) {
        echo "\nBase de datos creada: $databaseName";
        return true;
    } else {
        echo "\nError en la creación de base de datos: " . $conn->error;
        return false;
    }
}

function createTableSql($conn, $tableName)
{
    $sql = "CREATE TABLE IF NOT EXISTS $tableName (
        _id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombres VARCHAR(50) NOT NULL,
        apellidos VARCHAR(50) NOT NULL,
        ciudad VARCHAR(50) NULL,
        correo VARCHAR(50) NULL,
        telefono int(11) NULL,
        `fecha de nacimiento` int(11) NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "\nCreación de tabla $tableName exitoso";
    } else {
        echo "\nError en la creación de tabla $tableName: " . $conn->error;
    }
}

function insertSql($conn, $tableName, $user)
{
    $id = $user['_id'];
    $name = $user['nombres'];
    $lastName = $user['apellidos'];
    $city = $user['ciudad'];
    $email = $user['correo'];
    $telephone = $user['telefono'];

    // $date_format = DateTime::createFromFormat('d/m/y', $user['fecha de nacimiento'])->format('m/d/y');
    $date = strtotime($user['fecha de nacimiento']);

    $query = "INSERT INTO $tableName (_id, nombres, apellidos, ciudad, correo, telefono, `fecha de nacimiento`)
    VALUES ($id,'$name','$lastName','$city','$email',$telephone,$date)";

    if ($conn->query($query) === TRUE) {
        echo "\n Nuevo registro creado en $tableName";
    } else {
        echo "\nError: " . $query . "<br>" . $conn->error;
    }
}

function getUsersSql($conn,$tableName)
{
    $sql = "SELECT _id, nombres, apellidos, ciudad, correo, telefono, `fecha de nacimiento` FROM $tableName";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        $users = [];
        while($row = $result->fetch_assoc()) {
            $user = [];
            $user['_id'] =  $row["_id"];
            $user['nombres'] =  $row["nombres"];
            $user['apellidos'] =  $row["apellidos"];
            $user['ciudad'] =  $row["ciudad"];
            $user['correo'] =  $row["correo"];
            $user['telefono'] =  $row["telefono"];
            $user['fecha de nacimiento'] =  $row["fecha de nacimiento"];

            $users[] = $user;
        }
        return $users;
    } else {
        echo "0 results";
    }
}
