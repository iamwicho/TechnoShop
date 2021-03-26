<?php

class Database
{
    private $con;
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "technoshop";
    function __construct()
    {
        $this->connect_db();
    }
    public function connect_db()
    {
        $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
        if (mysqli_connect_error()) {
            die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
        }
    }
    
    public function readCliente()
    {
        $sql = "SELECT * FROM cliente INNER JOIN sexo ON cliente.sexo=sexo.id_Sexo";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function readEmpleado()
    {
        $sql = "SELECT * FROM empleado INNER JOIN usuario ON empleado.id_Tipousuario=usuario.id_Tipousuario INNER JOIN sexo ON empleado.sexo=sexo.id_Sexo";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function readLaptop()
    {
        $sql = "SELECT * FROM laptop";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    
    public function deleteCliente($id_Cliente)
    {
        $sql = "DELETE FROM cliente WHERE id_Cliente=$id_Cliente";
        $res = mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteEmpleado($id_Empleado)
    {
        $sql = "DELETE FROM empleado WHERE id_Empleado=$id_Empleado";
        $res = mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteLaptop($id_Producto)
    {
        $sql = "DELETE FROM laptop WHERE id_Producto=$id_Producto";
        $res = mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
}
