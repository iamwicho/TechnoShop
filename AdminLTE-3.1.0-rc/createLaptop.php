<?php 
if (isset($_POST['CLaptop'])){
	require_once 'pages/tables/database.php';
	$link = mysqli_connect("localhost", "root", "", "technoshop");
	$laptop = new Database();
	$pantalla=new Database();
	$imagen=new Database();
	$cantidad = mysqli_real_escape_string($link, $_POST['cantidad']); 
	$condicion = mysqli_real_escape_string($link, $_POST['condicion']);
    $disponibilidad= mysqli_real_escape_string($link, $_POST['disponibilidad']);
    $id_fabricante=mysqli_real_escape_string($link, $_POST['id_fabricante']);
	$modelo = mysqli_real_escape_string($link, $_POST['modelo']); 
	$precio = mysqli_real_escape_string($link, $_POST['precio']); 
    $imagen1=mysqli_real_escape_string($link, $_POST['imagen1']); 
    $imagen2=mysqli_real_escape_string($link, $_POST['imagen2']); 
    $imagen3=mysqli_real_escape_string($link, $_POST['imagen3']); 
    $imagen4=mysqli_real_escape_string($link, $_POST['imagen4']); 
    $imagen5=mysqli_real_escape_string($link, $_POST['imagen5']); 
	$id_Sistema = mysqli_real_escape_string($link, $_POST['id_Sistema']); 
	$ram = mysqli_real_escape_string($link, $_POST['ram']); 
	$graficos = mysqli_real_escape_string($link, $_POST['graficos']);
	$almacenamientoPrincipal = mysqli_real_escape_string($link, $_POST['almacenamientoPrincipal']);
	$almacenamientoSecundario = mysqli_real_escape_string($link, $_POST['almacenamientoSecundario']);
	$id_Familia = mysqli_real_escape_string($link, $_POST['id_Familia']);
	$procesador = mysqli_real_escape_string($link, $_POST['procesador']);
	$puertos = mysqli_real_escape_string($link, $_POST['puertos']);
	$wifi = mysqli_real_escape_string($link, $_POST['wifi']);
	$bluetooth = mysqli_real_escape_string($link, $_POST['bluetooth']);
	$garantia = mysqli_real_escape_string($link, $_POST['garantia']);
	$microfono = mysqli_real_escape_string($link, $_POST['microfono']);
	$camara = mysqli_real_escape_string($link, $_POST['camara']);
	$altavoces = mysqli_real_escape_string($link, $_POST['altavoces']);
	$teclado = mysqli_real_escape_string($link, $_POST['teclado']);
	$unidadOptica = mysqli_real_escape_string($link, $_POST['unidadOptica']);
	$bateria = mysqli_real_escape_string($link, $_POST['bateria']);
	$tamaño = mysqli_real_escape_string($link, $_POST['tamaño']);
	$resolucion = mysqli_real_escape_string($link, $_POST['resolucion']);
	$frecuencia = mysqli_real_escape_string($link, $_POST['frecuencia']);
	
	$res1=$pantalla->createPantalla($tamaño,$resolucion,$frecuencia);
	if($res1){

		$res2=$imagen->createImagen($imagen1,$imagen2,$imagen3,$imagen4,$imagen5);
		if($res2){

			$res3 = $laptop->createLaptop($cantidad,$condicion,$disponibilidad,$id_fabricante,$modelo,$precio,$id_Sistema,$ram,$graficos,$almacenamientoPrincipal,$almacenamientoSecundario,$id_Familia,$procesador,$puertos,$wifi,$bluetooth,$garantia,$microfono,$camara,$altavoces,$teclado,$unidadOptica,$bateria);
		
			if($res3){
				header('location: pages/tables/TablaLaptop.php');
			}else{
				echo "algo salio mal en res3";
			}

		}else{
			echo 'algo salio mal en res2';
		}
		
	}else{
		echo "algo salio mal en res1";
	}
    
}


?>