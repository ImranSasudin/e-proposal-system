<?php
$successLogout = "true";

session_start();
if(isset($_SESSION['user_id'])||isset($_SESSION['admin_id']))
{

session_destroy();
header("Location: login.php?successLogout=$successLogout");
exit();
}

?>