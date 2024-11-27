<?php
require_once("../app/loader.php");
session_start();
session_destroy();
unset($_SESSION["email"]);
unset($_SESSION["password"]);
header('location:'.SITEROOT."auth/login.php");

?>