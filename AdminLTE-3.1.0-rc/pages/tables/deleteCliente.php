<?php 
if (isset($_GET['id_Cliente'])){
	include('database.php');
	$cliente = new Database();
	$id_Cliente=intval($_GET['id_Cliente']);
	$res = $cliente->deleteCliente($id_Cliente);
	if($res){
		header('location: TablaCliente.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>