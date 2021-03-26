
   <?php
  require_once('config.php');
   $id_Empleado=$_GET['id_Empleado'];
   $sql="Delete from empleado where id_Empleado='".$id_Empleado."'";
  mysqli_query($link, $sql);
  header('location:TablaEmpleado.php')
   ?>