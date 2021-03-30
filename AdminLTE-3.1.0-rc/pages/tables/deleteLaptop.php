<?php 
if (isset($_POST['deleteLaptop'])){
	include('database.php');
	$laptop = new Database();
	$id_Producto=intval($_POST['delete_idL']);
	$res = $laptop->deleteLaptop($id_Producto);
	if($res){
		header('location: TablaLaptop.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>