<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['tipo']) && isset($_POST['descripcion']) ) {
    
    $tipo = ($_POST['tipo']);
    $cliente = ($_POST['cliente']);
    $descripcion    = ($_POST['descripcion']);
    
    
    mysqli_query($con, "INSERT INTO queja (numQueja, cliente, tipo, descripcion)
VALUES ('','$cliente', '$tipo','$descripcion')");
    echo "<head><script>alert('Sugerencia Añadida con EXITO !');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    
}
?>
