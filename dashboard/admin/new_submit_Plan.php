<?php
require 'db_conn.php';
page_protect();
if (!empty($_POST['codPlan']) && !empty($_POST['descripcion']) && !empty($_POST['valor']) && !empty($_POST['observaciones'])) {
    
    $codPlan    = rtrim($_POST['codPlan']);
    $descripcion = rtrim($_POST['descripcion']);
    $valor    = rtrim($_POST['valor']);
    $observaciones = rtrim($_POST['observaciones']);
   
    
 
    
    mysqli_query($con, "INSERT INTO plan (codPlan, descripcion, valor, observaciones)
VALUES ('$codPlan','$descripcion', '$valor','$observaciones')");
    echo "<meta http-equiv='refresh' content='0; url=view_plan.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_plan.php'>";
    
}
?>
