<?php 
if (isset($_POST['deleteCliente'])){
	include('database.php');
	$cliente = new Database();
	$id_Cliente=intval($_POST['delete_id']);
	$res = $cliente->deleteCliente($id_Cliente);
	if($res){
		header('location: TablaCliente.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>
