<?php
include 'db_conn.php';

$msgid = $_POST['name'];
if (strlen($msgid) > 0) {
    mysqli_query($con, "DELETE FROM plan WHERE codPlan='$msgid'");
    echo "<html><head><script>alert('Plan Eliminado');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_plan.php'>";
} else {
    echo "<html><head><script>alert('ERROR! Delete Opertaion Unsucessfull');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_plan.php'>";
}
mysqli_close($con);

?>

