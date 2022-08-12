<?php
$id = $_GET['id'];
$sql = "DELETE FROM news where news_id='$id'";
$query = mysqli_query($conn,$sql);
header('location:index.php');
?>
