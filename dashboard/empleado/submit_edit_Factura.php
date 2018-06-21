<?php
require 'db_conn.php';
page_protect();
if (!empty($_POST['estado'])) {
    
    $numFactura    = rtrim($_POST['numFactura']);
  
    $estado = rtrim($_POST['estado']);
   
    
 
    
    mysqli_query($con, "UPDATE factura_plan SET estado='$estado' WHERE numFactura='$numFactura'");
     echo "<head><script>alert('Exito');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Factura.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Factura.php'>";
    
}
?>