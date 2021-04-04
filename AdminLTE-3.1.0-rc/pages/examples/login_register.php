<?php

class Database
{

    public function login()
    {

        $conn = new mysqli("localhost","root","","technoshop");
	
        if($conn->connect_errno)
        {
              echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
        }
        //include('conexion.php');

        $nombreUsuario = $_POST["txtusuario"];
        $contraseña 	= $_POST["txtpassword"];
        
        if(isset($_POST["btnloginx"]))
        {
        
        $queryusuario = mysqli_query($conn,"SELECT * FROM login WHERE nombreUsuario = '$nombreUsuario'");
        $nr 		= mysqli_num_rows($queryusuario); 
        $mostrar	= mysqli_fetch_array($queryusuario); 
            
        if (($nr == 1) && (password_verify($contraseña,$mostrar['contraseña'])) )
            { 
                session_start();
                $_SESSION['nombredelusuario']=$nombre;
                header("Location: principal.php");
            }
        else
            {
            echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'index.html' </script>";
            }
        }
    }

    public function register()
    {

            if(isset($_POST["btnregistrarx"]))
            {

            $queryusuario 	= mysqli_query($conn,"SELECT * FROM login WHERE usu = '$nombre'");
            $nr 			= mysqli_num_rows($queryusuario); 

            if ($nr == 0)
            {

                $pass_fuerte = password_hash($pass, PASSWORD_BCRYPT);
                $queryregistrar = "INSERT INTO login(usu, pass) values ('$nombre','$pass_fuerte')";
                

            if(mysqli_query($conn,$queryregistrar))
            {
                echo "<script> alert('Usuario registrado: $nombre');window.location= 'index.html' </script>";
            }
            else 
            {
                echo "Error: " .$queryregistrar."<br>".mysql_error($conn);
            }

            }else
            {
                echo "<script> alert('No puedes registrar a este usuario: $nombre');window.location= 'index.html' </script>";
            }

            } 

    }
}

?>