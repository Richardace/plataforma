<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['name'])) {
    
    
    
    $numOficio = rtrim($_POST['name']);
    
    
    mysqli_query($con, "DELETE FROM oficio_empleado WHERE numOficio='$numOficio'");
    echo "<head><script>alert('Oficio Eliminado Correctamente');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_oficioEmpleado.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_OficioEmpleado.php'>";
    
}
?>
