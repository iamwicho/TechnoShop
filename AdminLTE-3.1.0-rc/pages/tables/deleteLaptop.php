<?php 
if (isset($_GET['id_Producto'])){
	include('database.php');
	$laptop = new Database();
	$id_Producto=intval($_GET['id_Producto']);
	$res = $laptop->deleteLaptop($id_Producto);
	if($res){
		header('location: TablaLaptop.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>