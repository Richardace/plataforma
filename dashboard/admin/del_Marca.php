<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['name'])) {
    
    
    
    $codOficio= rtrim($_POST['name']);
    
    
    mysqli_query($con, "DELETE FROM marca WHERE codMarca='$codOficio'");
    echo "<head><script>alert('Marca Eliminada');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Marca.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Marca.php'>";
    
}
?>
