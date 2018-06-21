<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['name'])) {
    
    
    
    $login_id = rtrim($_POST['name']);
    
    
    mysqli_query($con, "DELETE FROM cliente WHERE login_id='$login_id'");
    echo "<head><script>alert('Cliente Eliminado Correctamente');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Cliente.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Cliente.php'>";
    
}
?>
