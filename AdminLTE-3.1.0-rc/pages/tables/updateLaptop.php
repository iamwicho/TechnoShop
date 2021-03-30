<?php 
if (!empty($_POST['updateLaptop'])){
	require_once 'database.php';
	$link = mysqli_connect("localhost", "root", "", "technoshop");
	$laptop = new Database();
	$id_Producto=intval($_POST['id_Producto']);
	$condicion = mysqli_real_escape_string($link, $_POST['condicion']); 
	$disponibilidad = mysqli_real_escape_string($link, $_POST['disponibilidad']); 
	$modelo = mysqli_real_escape_string($link, $_POST['modelo']); 
	$ram = mysqli_real_escape_string($link, $_POST['ram']); 
	$graficos = mysqli_real_escape_string($link, $_POST['graficos']); 
	$almacenamientoPrincipal = mysqli_real_escape_string($link, $_POST['almacenamientoPrincipal']); 
	$almacenamientoSecundario = mysqli_real_escape_string($link, $_POST['almacenamientoSecundario']); 
	$puertos = mysqli_real_escape_string($link, $_POST['puertos']); 
	$bateria = mysqli_real_escape_string($link, $_POST['bateria']); 
	$res = $laptop->updateLaptop($id_Producto,$condicion,$disponibilidad,$modelo,$ram,$graficos,$almacenamientoPrincipal,$almacenamientoSecundario,$puertos,$bateria);
	if($res){
		header('location: TablaLaptop.php');
	}else{
		echo "Error al actualizar el registro";
	}
    
}


?>
  
