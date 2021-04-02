<?php 
if (isset($_POST['CEmpleado'])){
	require_once 'pages/tables/database.php';
	$link = mysqli_connect("localhost", "root", "", "technoshop");
	$empleado = new Database();
	$id_Tipousuario = mysqli_real_escape_string($link, $_POST['id_Tipousuario']); 
	$nombres = mysqli_real_escape_string($link, $_POST['nombres']); 
	$apellidos = mysqli_real_escape_string($link, $_POST['apellidos']);
    $edad= mysqli_real_escape_string($link, $_POST['edad']);
    $sexo=mysqli_real_escape_string($link, $_POST['sexo']);
	$usuario = mysqli_real_escape_string($link, $_POST['usuario']); 
	$correo = mysqli_real_escape_string($link, $_POST['correo']); 
    $contraseña=mysqli_real_escape_string($link, $_POST['contraseña']); 
	$telefono = mysqli_real_escape_string($link, $_POST['telefono']); 
	$direccion = mysqli_real_escape_string($link, $_POST['direccion']); 
	$res = $empleado->createEmpleado($id_Tipousuario,$nombres, $apellidos, $usuario, $contraseña, $edad, $sexo, $correo, $telefono, $direccion);

    if($res){
		header('location: pages/tables/TablaEmpleado.php');
	}else{
		echo $res;
	}
    
}


?>