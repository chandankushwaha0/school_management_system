<?php 
session_start();

session_unset();

session_destroy();

header('Location: http://localhost/college_project/pages/index.php');

?>
