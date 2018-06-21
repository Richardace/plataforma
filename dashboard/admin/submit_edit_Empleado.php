<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['name'])) {
    
    
    $login_id    = rtrim($_POST['login_id']);
    $name = rtrim($_POST['name']);
    $apellido    = rtrim($_POST['apellido']);
    $pass_key    = rtrim($_POST['pass_key']);
    $level    = "4";
    $sex = rtrim($_POST['sex']);
    $correo    = rtrim($_POST['correo']);
    $telefono    = rtrim($_POST['telefono']);
    
    $login_id = $_POST['login_id'];
    
    mysqli_query($con, "UPDATE empleado SET name='$name', apellido='$apellido', pass_key='$pass_key', level='$level', sex='$sex', correo='$correo', telefono='$telefono'WHERE login_id='$login_id'");
    echo "<meta http-equiv='refresh' content='0; url=view_empleado.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_empleado.php'>";
    
}
?>
