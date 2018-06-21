<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['nombre']) && isset($_POST['marca']) && isset($_POST['valor'])) {
    
    $codModelo = rtrim($_POST['codModelo']);
    $nombre = rtrim($_POST['nombre']);
    $marca = rtrim($_POST['marca']);
    $valor = rtrim($_POST['valor']);

    
    
    mysqli_query($con, "UPDATE modelocelular SET nombre='$nombre' , marca='$marca' , valor='$valor' WHERE codModelo='$codModelo'");
    echo "<meta http-equiv='refresh' content='0; url=view_ModeloCelular.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_ModeloCelular.php'>";
    
}
?>
