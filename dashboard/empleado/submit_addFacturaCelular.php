<?php
require 'db_conn.php';
page_protect();
if (!empty($_POST['modelo']) && !empty($_POST['valor'])) {
    
    $valor    = rtrim($_POST['valor']);
    $plan = rtrim($_POST['plan']);
    $cliente = rtrim($_POST['cliente']);
    $modelo = rtrim($_POST['modelo']);
    $observaciones = rtrim($_POST['observaciones']);
   
    
 
    
    mysqli_query($con, "INSERT INTO factura_celular (numFactura, cliente, modelo, valor, observaciones)
VALUES ('','$cliente', '$modelo', '$valor','$observaciones')");
    echo "<meta http-equiv='refresh' content='0; url=view_FacturaCelulares.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_FacturaCelulares.php'>";
    
}
?>
