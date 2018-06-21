<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['codSucursal'])) {
    
    
    $login_id    = rtrim($_POST['codSucursal']);
    $name = rtrim($_POST['ciudad']);
    
    
    
    mysqli_query($con, "UPDATE sucursal SET ciudad='$name' WHERE codSucursal='$login_id'");
    echo "<head><script>alert('Sucursal Modificada Correctamente');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Sucursal.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Sucursal.php'>";
    
}
?>
