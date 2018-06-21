<?php
require 'db_conn.php';
page_protect();
if (!empty($_POST['codMarca']) && !empty($_POST['descripcion'])) {
    
    $codMarca    = rtrim($_POST['codMarca']);
    $descripcion = rtrim($_POST['descripcion']);
    
   
    
 
    
    mysqli_query($con, "INSERT INTO marca (codMarca, nombre)
VALUES ('$codMarca','$descripcion')");
    echo "<meta http-equiv='refresh' content='0; url=view_Marca.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Marca.php'>";
    
}
?>
