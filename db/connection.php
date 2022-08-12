<?php 

$conn = mysqli_connect('localhost','root','','asm');
if($conn) {
    mysqli_query($conn,'SET NAMES "UTF8"');
}else{
    echo ' ket noi loi';
}
session_start();
?>