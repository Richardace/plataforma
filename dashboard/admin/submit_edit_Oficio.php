<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['descripcion'])) {
    
    
    $codOficio    = rtrim($_POST['codOficio']);
    $descripcion = rtrim($_POST['descripcion']);
    
    
    mysqli_query($con, "UPDATE oficio SET descripcion='$descripcion' WHERE codOficio='$codOficio'");
    echo "<meta http-equiv='refresh' content='0; url=view_Oficio.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Oficio.php'>";
    
}
?>
