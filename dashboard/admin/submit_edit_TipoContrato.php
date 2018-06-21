<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['descripcion']) && isset($_POST['salario'])) {
    
    
    $codTipo    = rtrim($_POST['codTipo']);
    $descripcion = rtrim($_POST['descripcion']);
    $salario = rtrim($_POST['salario']);
    
    
    mysqli_query($con, "UPDATE tipocontrato SET descripcion='$descripcion', salario='$salario' WHERE codTipo='$codTipo'");
    echo "<meta http-equiv='refresh' content='0; url=view_TipoContrato.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_TipoContrato.php'>";
    
}
?>
