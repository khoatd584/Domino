<?php
require_once './db/connection.php';
?>
<?php 
unset($_SESSION['user']);
header('location: index.php');
?>