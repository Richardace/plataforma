<?php
require 'db_conn.php';
page_protect();
if (!empty($_POST['descripcion'])) {
    
    $codOficio    = "";
    $descripcion = rtrim($_POST['descripcion']);
   
    
 
    
    mysqli_query($con, "INSERT INTO oficio (codOficio, descripcion)
VALUES ('$codOficio','$descripcion')");
    echo "<meta http-equiv='refresh' content='0; url=view_oficio.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_oficio.php'>";
    
}
?>
