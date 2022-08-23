<?php
require_once './db/connection.php';
?>
<?php 
unset($_SESSION['user']);
header('location: sign-in.php');
?>