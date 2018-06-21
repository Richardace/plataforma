<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['codPlan'])) {
    
    $codPlan = $_POST['codPlan'];
    $descripcion    = rtrim($_POST['descripcion']);
    $valor = rtrim($_POST['valor']);
    $observaciones    = rtrim($_POST['observaciones']);
   
    
    
    
    mysqli_query($con, "UPDATE plan SET descripcion='$descripcion', valor='$valor',  observaciones='$observaciones' WHERE codPlan='$codPlan'");
    echo "<meta http-equiv='refresh' content='0; url=view_plan.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_plan.php'>";
    
}
?>
