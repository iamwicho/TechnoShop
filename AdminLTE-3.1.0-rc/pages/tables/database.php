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

    public function readBitacora(){
        $sql = "SELECT * FROM bitacora";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function readCliente()
    {
        $sql = "SELECT * FROM cliente INNER JOIN sexo ON cliente.sexo=sexo.id_Sexo";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function countCliente()
    {
        $sql = "SELECT * FROM cliente INNER JOIN sexo ON cliente.sexo=sexo.id_Sexo";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_num_rows($res);
        return $filas;
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
    public function readPedido()
    {
        $sql = "SELECT * FROM pedido INNER JOIN estado ON pedido.id_Estado=estado.id_Estado";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function readLaptop()
    {
        $sql = "SELECT * FROM laptop";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function countLaptop()
    {
        $sql = "SELECT * FROM laptop";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_num_rows($res);
        return $filas;
    }
    

    public function createCliente($nombres, $apellidos, $usuario, $contraseña, $edad, $sexo, $correo, $telefono, $direccion)
    {
        $sha = password_hash($contraseña, PASSWORD_BCRYPT);
        $sql = "INSERT INTO cliente (id_Cliente,id_Tipousuario, nombres, apellidos, edad, sexo, usuario, correo, contraseña, telefono,direccion) VALUES (NULL, 'A', '" . $nombres . "','" . $apellidos . "', $edad, (SELECT id_Sexo from sexo where sexo='" . $sexo . "'), '" . $usuario . "', '" . $correo . "', '" . $sha . "',  '" . $telefono . "', '" . $direccion . "' )";
        $res = mysqli_query($this->con, $sql);
        return $res;
        if ($res) {
            return true;
        } else {
            return $res;
        }
    }

    public function createEmpleado($id_Tipousuario, $nombres, $apellidos, $usuario, $contraseña, $edad, $sexo, $correo, $telefono, $direccion)
    {
        $sha = password_hash($contraseña, PASSWORD_BCRYPT);
        $sql = "INSERT INTO empleado (id_Empleado,id_Tipousuario, nombres, apellidos, edad, sexo, usuario, correo, contraseña, telefono,direccion) VALUES (NULL, (SELECT id_Tipousuario from usuario where tipo='" . $id_Tipousuario . "'), '" . $nombres . "','" . $apellidos . "', $edad, (SELECT id_Sexo from sexo where sexo='" . $sexo . "'), '" . $usuario . "', '" . $correo . "', '" . $sha . "',  '" . $telefono . "', '" . $direccion . "' )";
        $res = mysqli_query($this->con, $sql);
        return $res;
        if ($res) {
            return true;
        } else {
            return $res;
        }
    }

    public function createLaptop( $cantidad, $condicion, $disponibilidad, $id_fabricante, $modelo, $precio, $id_Sistema, $ram, $graficos, $almacenamientoPrincipal, $almacenamientoSecundario, $id_Familia, $procesador, $puertos, $wifi, $bluetooth, $garantia, $microfono, $camara, $altavoces, $teclado, $unidadOptica, $bateria)
    {   
        
        $sql = "INSERT INTO laptop (id_Producto,cantidad,condicion,disponibilidad,id_fabricante,
        modelo,precio,id_Imagen,
        id_Sistema,ram,graficos,almacenamientoPrincipal,almacenamientoSecundario,
        id_Familia,procesador,puertos,wifi,bluetooth,garantia,microfono,camara,altavoces,teclado,
        unidadOptica,bateria,id_Pantalla) VALUES (NULL,'".$cantidad."','".$condicion."','".$disponibilidad."',
         (SELECT id_fabricante from fabricante where nombre='".$id_fabricante."'),'".$modelo."','".$precio."',
         (SELECT id_Imagen FROM imagen ORDER BY id_Imagen DESC LIMIT 1),
        (SELECT id_Sistema from sistema where nombre='".$id_Sistema."'),'".$ram."','".$graficos."',
        '".$almacenamientoPrincipal."','".$almacenamientoSecundario."',
        (SELECT id_Familia from familia where nombre ='".$id_Familia."'),'".$procesador."',
        '".$puertos."',(SELECT id_Eleccion from eleccion where eleccion='".$wifi."'),
        (SELECT id_Eleccion from eleccion where eleccion='".$bluetooth."'),'".$garantia."',
        (SELECT id_Eleccion from eleccion where eleccion='".$microfono."'),
        (SELECT id_Eleccion from eleccion where eleccion='".$camara."'),
        (SELECT id_Eleccion from eleccion where eleccion='".$altavoces."'),
        (SELECT id_Teclado from teclado where idioma='".$teclado."'),
        (SELECT id_Eleccion from eleccion where eleccion='".$unidadOptica."'),
        '".$bateria."',(SELECT id_Pantalla FROM pantalla ORDER BY id_Pantalla DESC LIMIT 1))";
        $res = mysqli_query($this->con, $sql);
        return $res;
        if ($res) {
            return true;
        } else {
            return $res;
        }
    }

    public function createPantalla($tamaño,$resolucion,$frecuencia){
        $sql = "INSERT INTO pantalla (id_Pantalla, tamaño, resolucion, frecuencia) VALUES (NULL,  '" . $tamaño . "','" . $resolucion . "',  '" . $frecuencia . "' )";
        $res = mysqli_query($this->con, $sql);
        return $res;
        if ($res) {
            return true;
        } else {
            echo mysqli_error($sql);
        }
    }

    public function createImagen($imagen1,$imagen2,$imagen3,$imagen4,$imagen5){
        $sql = "INSERT INTO imagen (id_Imagen, imagen1, imagen2, imagen3, imagen4, imagen5) VALUES (NULL,  '" . $imagen1 . "','" . $imagen2 . "',  '" . $imagen3 . "',  '" . $imagen4 . "',  '" . $imagen5 . "' )";
        $res = mysqli_query($this->con, $sql);
        return $res;
        if ($res) {
            return true;
        } else {
            echo mysqli_error($sql);
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

    public function updatePedido($id_Pedido,$id_Estado)
    {
        $sql =  "UPDATE pedido SET id_Estado = (SELECT id_Estado from estado WHERE estado='" . $id_Estado . "') WHERE id_Pedido = '" . $id_Pedido . "' ";
        $res = mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        } else {
            echo $res;
        }
    }
    public function countPedido()
    {
        $sql = "SELECT * FROM pedido";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_num_rows($res);
        return $filas;
    }
    
}
