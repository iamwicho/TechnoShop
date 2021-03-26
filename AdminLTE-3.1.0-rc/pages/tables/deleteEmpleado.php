<?php 
if (isset($_GET['id_Empleado'])){
	include('database.php');
	$empleado = new Database();
	$id_Empleado=intval($_GET['id_Empleado']);
	$res = $empleado->deleteEmpleado($id_Empleado);
	if($res){
		header('location: TablaEmpleado.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>