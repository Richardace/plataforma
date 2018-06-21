<?php
require 'db_conn.php';
page_protect();
if (!empty($_POST['codEmpleado']) && !empty($_POST['oficio']) &&  !empty($_POST['fecha']) && !empty($_POST['estado'])) {
    
    $codEmpleado    = rtrim($_POST['codEmpleado']);
    $oficio = rtrim($_POST['oficio']);
    $fecha = rtrim($_POST['fecha']);
    $estado = rtrim($_POST['estado']);
    
    
 
    
    mysqli_query($con, "INSERT INTO oficio_Empleado ( numOficio, codEmpleado, oficio, fecha, estado)
VALUES ('','$codEmpleado', '$oficio','$fecha','$estado')");
    echo "<meta http-equiv='refresh' content='0; url=view_OficioEmpleado.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_OficioEmpleado.php'>";
    
}
?>
