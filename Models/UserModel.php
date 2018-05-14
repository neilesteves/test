<?php
include_once "config.php";
include_once "Model.php";

class User extends Model
{
    protected $table = DB_TABLE;
    /**
    * Inicia conexión DB
    */
    public function __construct()
    {
        parent::__construct();
    }

    /**
    * Obtiene el usuario de la DB por ID
    */
    public function getUser($id)
    {
        $query = "SELECT * FROM $this->table WHERE `_id` = $id";
        return $this->db->query($query)->fetch_array(MYSQLI_ASSOC);
    }

    public function all()
    {
        $query = "SELECT _id, nombres, apellidos, ciudad, correo, telefono, `fecha de nacimiento` FROM $this->table";
        return $this->db->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    public function createUser($name,$lastName,$city,$email,$telephone,$date)
    {
        $date = strtotime($date);

        $query = "INSERT INTO $this->table (nombres, apellidos, ciudad, correo, telefono, `fecha de nacimiento`)
        VALUES ('$name','$lastName','$city','$email',$telephone,$date)";

        if($this->db->query($query) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function updateUser($id,$name,$lastName,$city,$email,$telephone,$date)
    {
        $date = strtotime($date);

        $query = "UPDATE $this->table SET nombres='$name', apellidos='$lastName', ciudad='$city', correo='$email', telefono=$telephone, `fecha de nacimiento`= $date WHERE _id=$id";

        if($this->db->query($query) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($id)
    {
        $query = "DELETE FROM $this->table WHERE _id=$id";

        if($this->db->query($query) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
