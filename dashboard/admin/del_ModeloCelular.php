<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['name'])) {
    
    
    
    $codModelo = rtrim($_POST['name']);
    
    
    mysqli_query($con, "DELETE FROM modelocelular WHERE codModelo='$codModelo'");
    echo "<head><script>alert('Modelo Eliminado Correctamente');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_ModeloCelular.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_ModeloCelular.php'>";
    
}
?>
