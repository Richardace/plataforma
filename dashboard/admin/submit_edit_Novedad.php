<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['novedad'])) {
    
    
    $numQueja    = rtrim($_POST['numQueja']);
    $novedad = rtrim($_POST['novedad']);
    
    
    mysqli_query($con, "UPDATE queja SET novedad='$novedad' WHERE numQueja='$numQueja'");
    echo "<meta http-equiv='refresh' content='0; url=view_Queja.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Queja.php'>";
    
}
?>
