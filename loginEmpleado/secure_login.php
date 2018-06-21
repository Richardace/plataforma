
<?php
include '../include/db_conn.php';

$user_id_auth = ($_POST['user_id_auth']);
$pass_key = ($_POST['pass_key']);


$sql          = "SELECT * FROM empleado WHERE login_id='$user_id_auth' and pass_key='$pass_key'";
$result       = mysqli_query($con, $sql);
$count        = mysqli_num_rows($result);
if ($count == 1) {
    $row = mysqli_fetch_assoc($result);
    session_start();
    // store session data
    $_SESSION['user_data']  = $user_id_auth;
    $_SESSION['logged']     = "start";
    $_SESSION['auth_level'] = $row['level'];
    $_SESSION['sex']        = $row['sex'];
    $_SESSION['full_name']  = $row['name'];
    $auth_l_x               = $_SESSION['auth_level'];
    if ($auth_l_x == 5) {
        header("location: ../dashboard/admin/");
    } else if ($auth_l_x == 4) {
        header("location: ../dashboard/empleado/");
    } else if ($auth_l_x == 3) {
        header("location: ../dashboard/member/");        
    } else {
        header("location: ../login/");
    }
} else {
    include 'index.php';
    echo "<html><head><script>alert('Usuario O Contraseña Invalidos');</script></head></html>";
}
?>