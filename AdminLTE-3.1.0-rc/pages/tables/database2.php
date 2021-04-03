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
    public function readSexo()
    {
        $sql = "SELECT * FROM sexo";
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

    public function createCliente($nombres, $apellidos, $usuario, $contraseña, $edad, $sexo, $correo, $telefono, $direccion)
    {
        $sha=sha1($contraseña);
        $sql = "INSERT INTO cliente (id_Cliente,id_Tipousuario, nombres, apellidos, edad, sexo, usuario, correo, contraseña, telefono,direccion) VALUES (NULL, 'A', '" . $nombres . "','" . $apellidos . "', $edad, (SELECT id_Sexo from sexo where sexo='" . $sexo . "'), '" . $usuario . "', '" . $correo . "', '" . $sha . "',  '" . $telefono . "', '" . $direccion . "' )";
        $res = mysqli_query($this->con, $sql);
        return $res;
        if ($res) {
            return true;
        } else {
            return $res;
        }
    }

    public function createEmpleado($id_Tipousuario,$nombres, $apellidos, $usuario, $contraseña, $edad, $sexo, $correo, $telefono, $direccion)
    {
        $sha=sha1($contraseña);
        $sql = "INSERT INTO empleado (id_Empleado,id_Tipousuario, nombres, apellidos, edad, sexo, usuario, correo, contraseña, telefono,direccion) VALUES (NULL, (SELECT id_Tipousuario from usuario where tipo='" . $id_Tipousuario . "'), '" . $nombres . "','" . $apellidos . "', $edad, (SELECT id_Sexo from sexo where sexo='" . $sexo . "'), '" . $usuario . "', '" . $correo . "', '" . $sha . "',  '" . $telefono . "', '" . $direccion . "' )";
        $res = mysqli_query($this->con, $sql);
        return $res;
        if ($res) {
            return true;
        } else {
            return $res;
        }
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

    public function updateCliente($id_Cliente, $nombres, $apellidos, $usuario, $correo, $telefono, $direccion)
    {
        $sql =  "UPDATE cliente SET nombres = '" . $nombres . "', apellidos='" . $apellidos . "', usuario='" . $usuario . "',telefono='" . $telefono . "',direccion='" . $direccion . "' WHERE id_Cliente = '" . $id_Cliente . "' ";
        $res = mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        } else {
            echo $res;
        }
    }

    public function updateEmpleado($id_Empleado, $nombres, $apellidos, $usuario, $correo, $telefono, $direccion)
    {
        $sql =  "UPDATE empleado SET nombres = '" . $nombres . "', apellidos='" . $apellidos . "', usuario='" . $usuario . "',correo='" . $correo . "',telefono='" . $telefono . "',direccion='" . $direccion . "' WHERE id_Empleado = '" . $id_Empleado . "' ";
        $res = mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        } else {
            echo $res;
        }
    }

    public function updateLaptop($id_Producto, $condicion, $disponibilidad, $modelo, $ram, $graficos, $almacenamientoPrincipal, $almacenamientoSecundario, $puertos, $bateria)
    {
        $sql =  "UPDATE laptop SET condicion = '" . $condicion . "', disponibilidad='" . $disponibilidad . "', modelo='" . $modelo . "',ram='" . $ram . "',graficos='" . $graficos . "',almacenamientoPrincipal='" . $almacenamientoPrincipal . "',almacenamientoSecundario='" . $almacenamientoSecundario . "',puertos='" . $puertos . "', bateria='" . $bateria . "' WHERE id_Producto = '" . $id_Producto . "' ";
        $res = mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        } else {
            echo $res;
        }
    }
}
