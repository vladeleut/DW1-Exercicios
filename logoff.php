<?php
/* logout.php */
session_start();
unset($_SESSION["LOGIN_USUARIO"]);
session_destroy();
header("Location:login.php?erro=4");
?>