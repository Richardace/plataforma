<?php
require 'db_conn.php';
page_protect();
if (!empty($_POST['codCliente']) && !empty($_POST['clienteID'])&& !empty($_POST['sucursal']) && !empty($_POST['fechaAfiliacion']) && !empty($_POST['estado'])) {
    
    $codCliente    = rtrim($_POST['codCliente']);
    $clienteID = rtrim($_POST['clienteID']);
    $sucursal    = rtrim($_POST['sucursal']);
    $fechaAfiliacion = rtrim($_POST['fechaAfiliacion']);
    $estado = rtrim($_POST['estado']);
   
    
 
    
    mysqli_query($con, "UPDATE cliente_sucursal SET clienteID='$clienteID', sucursal='$sucursal', fechaAfiliacion='$fechaAfiliacion', estado='$estado' WHERE codCliente='$codCliente'");
     echo "<head><script>alert('Exito');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_clienteSucursal.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_clienteSucursal.php'>";
    
}
?>