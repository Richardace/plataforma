<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['empleado'])) {
    
    $codEmpleado = rtrim($_POST['codEmpleado']);
    $empleado = rtrim($_POST['empleado']);
    $codContrato = rtrim($_POST['codContrato']);
    $sucursal = rtrim($_POST['sucursal']);
    $estado = rtrim($_POST['estado']);
    
    
    mysqli_query($con, "UPDATE empleado_sucursal SET empleado='$empleado', codContrato='$codContrato', sucursal='$sucursal', estado='$estado' WHERE codEmpleado='$codEmpleado'");
    echo "<meta http-equiv='refresh' content='0; url=view_EmpleadoSucursal.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_EmpleadoSucursal.php'>";
    
}
?>
