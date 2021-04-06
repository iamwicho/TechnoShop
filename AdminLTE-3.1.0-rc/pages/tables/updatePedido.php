<?php 
if (!empty($_POST['updatePedido'])){
	require_once 'database.php';
	$link = mysqli_connect("localhost", "root", "", "technoshop");
	$pedido = new Database();
	$id_Pedido=intval($_POST['id_Pedido']);
	$id_Estado = mysqli_real_escape_string($link, $_POST['id_Estado']); 

	$res = $pedido->updatePedido($id_Pedido,$id_Estado);
	if($res){
		header('location: ordenes.php');
	}else{
		echo "Error al actualizar el registro";
	}
    
}


?>
  
