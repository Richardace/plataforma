<?php
require 'db_conn.php';
page_protect();
if (!empty($_POST['login_id']) && !empty($_POST['name']) && !empty($_POST['apellido']) && !empty($_POST['pass_key'])  && !empty($_POST['sex']) && !empty($_POST['correo']) && !empty($_POST['telefono'])) {
    
    $login_id    = rtrim($_POST['login_id']);
    $name = rtrim($_POST['name']);
    $apellido    = rtrim($_POST['apellido']);
    $pass_key    = rtrim($_POST['pass_key']);
    $level    = "3";
    $sex = rtrim($_POST['sex']);
    $correo    = rtrim($_POST['correo']);
    $telefono    = rtrim($_POST['telefono']);
    
 
    
    mysqli_query($con, "INSERT INTO cliente (login_id, name, apellido, pass_key, level, sex, correo, telefono)
VALUES ('$login_id','$name','$apellido','$pass_key','$level','$sex','$correo','$telefono')");
    echo "<head><script>alert('Sucursal Añadida con EXITO !');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Cliente.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_Cliente.php'>";
    
}
?>
