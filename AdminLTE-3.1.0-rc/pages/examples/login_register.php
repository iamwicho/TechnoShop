<?php
ob_start();
//Para iniciar sesión
if (isset($_POST["btnlogin"])) {
    require_once '../tables/database.php';
    $link = mysqli_connect("localhost", "root", "", "technoshop");
    $usuario = $_POST["usuario"];
    $pass     = $_POST["contraseña"];


    $queryusuario = mysqli_query($link, "SELECT * FROM empleado WHERE usuario = '" . $usuario . "'");
    $nr         = mysqli_num_rows($queryusuario);
    $mostrar    = mysqli_fetch_array($queryusuario);
    $password=$mostrar['contraseña'];
    $passhash=password_hash($pass, PASSWORD_BCRYPT);
   

    if (($nr == 1) && (password_verify($pass,$mostrar['contraseña'])) )
    {   
        
        session_start();
		$_SESSION['usuario']=$usuario;
        if($mostrar['id_Tipousuario']=='911-A'){
            $_SESSION['rol']='Soporte Cliente';
        }
        
        header('location: ../../admin.php');
       
    } else {
        echo "<script> alert('Usuario o contraseña incorrecto.'); window.location= 'login-v2.html' </script>";
    }
}
