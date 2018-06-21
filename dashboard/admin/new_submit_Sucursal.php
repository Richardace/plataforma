<?php
require 'db_conn.php';
page_protect();
if (!empty($_POST['codSucursal']) && !empty($_POST['ciudad'])) {
    
    $codSucursal    = rtrim($_POST['codSucursal']);
    $ciudad = rtrim($_POST['ciudad']);
   
    
 
    
    mysqli_query($con, "INSERT INTO sucursal (codSucursal, ciudad)
VALUES ('$codSucursal','$ciudad')");
    echo "<head><script>alert('Sucursal Añadida Correctamente');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Sucursal.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Sucursal.php'>";
    
}
?>
