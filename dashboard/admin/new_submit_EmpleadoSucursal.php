<?php
require 'db_conn.php';
page_protect();
if (!empty($_POST['codEmpleado']) && !empty($_POST['empleado']) && !empty($_POST['descripcion']) && !empty($_POST['sucursal']) && !empty($_POST['fechaIngreso']) && !empty($_POST['estado'])) {
    
    $codEmpleado    = rtrim($_POST['codEmpleado']);
    $empleado = rtrim($_POST['empleado']);
    $descripcion    = rtrim($_POST['descripcion']);
    $sucursal    = rtrim($_POST['sucursal']);
    $fechaIngreso = rtrim($_POST['fechaIngreso']);
    $estado = rtrim($_POST['estado']);
   
    
 
    
    mysqli_query($con, "INSERT INTO empleado_sucursal (codEmpleado, empleado, codContrato, sucursal, fechaIngreso, estado)
VALUES ('$codEmpleado','$empleado', '$descripcion', '$sucursal','$fechaIngreso','$estado')");
    echo "<meta http-equiv='refresh' content='0; url=view_EmpleadoSucursal.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_EmpleadoSucursal.php'>";
    
}
?>
