<?php
include('../include/header.php');

session_destroy();
header('Location: /cms/login.php');

?>
