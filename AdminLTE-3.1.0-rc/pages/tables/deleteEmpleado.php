<?php 
if (isset($_POST['deleteEmpleado'])){
	include('database.php');
	$empleado = new Database();
	$id_Empleado=intval($_POST['delete_idE']);
	$res = $empleado->deleteEmpleado($id_Empleado);
	if($res){
		header('location: TablaEmpleado.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>
