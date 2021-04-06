<?php 
if (isset($_POST['CDescuento'])){
	require_once 'pages/tables/database.php';
	$link = mysqli_connect("localhost", "root", "", "technoshop");
	$descuento = new Database();
	$id_Producto = mysqli_real_escape_string($link, $_POST['id_Producto']); 
	$precio_des = mysqli_real_escape_string($link, $_POST['precio_des']);
	$res = $descuento->createDescuento($id_Producto, $precio_des);

    if($res){
		header('location: pages/tables/TablaDescuento.php');
	}else{
		echo $res;
	}
    
}


?>