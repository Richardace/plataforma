<?php
require 'db_conn.php';
page_protect();
if (!empty($_POST['codModelo']) && !empty($_POST['nombre']) && !empty($_POST['marca']) && !empty($_POST['valor'])) {
    
    $codModelo    = rtrim($_POST['codModelo']);
    $nombre = rtrim($_POST['nombre']);
    $marca    = rtrim($_POST['marca']);
    $valor = rtrim($_POST['valor']);
   
    
 
    
    mysqli_query($con, "INSERT INTO modelocelular (codModelo, nombre, marca, valor)
VALUES ('$codModelo','$nombre', '$marca','$valor')");
    echo "<meta http-equiv='refresh' content='0; url=view_ModeloCelular.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_ModeloCelular.php'>";
    
}
?>
