<?php
require 'db_conn.php';
page_protect();
if (!empty($_POST['codTipo']) && !empty($_POST['descripcion']) && !empty($_POST['salario'])) {
    
    $codTipo    = rtrim($_POST['codTipo']);
    $descripcion = rtrim($_POST['descripcion']);
    $salario    = rtrim($_POST['salario']);
    
 
    
    mysqli_query($con, "INSERT INTO tipocontrato (codTipo, descripcion, salario)
VALUES ('$codTipo','$descripcion', '$salario')");
    echo "<meta http-equiv='refresh' content='0; url=view_TipoContrato.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_TipoContrato.php'>";
    
}
?>
