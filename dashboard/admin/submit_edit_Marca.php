<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['nombre'])) {
    
    
    $codMarca    = rtrim($_POST['codMarca']);
    $nombre = rtrim($_POST['nombre']);
    
    
    mysqli_query($con, "UPDATE marca SET nombre='$nombre' WHERE codMarca='$codMarca'");
    echo "<meta http-equiv='refresh' content='0; url=view_Marca.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Marca.php'>";
    
}
?>
