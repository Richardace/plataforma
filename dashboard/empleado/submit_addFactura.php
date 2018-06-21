<?php
require 'db_conn.php';
page_protect();
if (!empty($_POST['plan']) && !empty($_POST['mes'])) {
    
    $valor    = rtrim($_POST['valor']);
    $plan = rtrim($_POST['plan']);
    $mes    = rtrim($_POST['mes']);
    $cliente = rtrim($_POST['cliente']);
    $estado = rtrim($_POST['estado']);
   
    
 
    
    mysqli_query($con, "INSERT INTO factura_plan (numFactura, codPlan, mes, cliente, valor, estado)
VALUES ('','$plan', '$mes','$cliente', '$valor','$estado')");
    echo "<meta http-equiv='refresh' content='0; url=view_Factura.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Factura.php'>";
    
}
?>
