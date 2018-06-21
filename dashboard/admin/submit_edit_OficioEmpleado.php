<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['codEmpleado']) && isset($_POST['oficio']) && isset($_POST['fecha']) && isset($_POST['estado'])) {
    
    $codEmpleado    = rtrim($_POST['codEmpleado']);
    $oficio = rtrim($_POST['oficio']);
    $fecha = rtrim($_POST['fecha']);
    $estado = rtrim($_POST['estado']);

    $numOficio = rtrim($_POST['numOficio']);
    
    mysqli_query($con, "UPDATE oficio_empleado SET codEmpleado='$codEmpleado',oficio='$oficio',fecha='$fecha',estado='$estado' WHERE numOficio='$numOficio'");
    echo "<meta http-equiv='refresh' content='0; url=view_OficioEmpleado.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_OficioEmpleado.php'>";
    
}
?>
