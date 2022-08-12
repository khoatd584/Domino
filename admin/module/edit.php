<?php
session_start();
$id = $_GET['id'];
$sql_up = "SELECT * FROM news where news_id='$id'";
$query_up = mysqli_query($conn,$sql_up);
$row_up = mysqli_fetch_array($query_up);


if(isset($_POST['submit'])){
    $news_name = $_POST['news_name'];

//    if(isset($_GET['news_image']['name']) ==""){
//     $news_image = $row_up['news_image'];

//    }else {
//     $news_image = $row_up['news_image'];

//    }
    
   $news_ingredient = $_POST['news_ingredient'];
    $news_price = $_POST['news_price'];
    $news_quantity = $_POST['news_quantity'];
// VALIDATE FORM
if(
   $news_name  == ""|| 
   $news_ingredient == ""||
   $news_price  == ""|| 
   $news_quantity  == ""
){
  $_SESSION['error'] = 'Please fill in the product information completely!';
header("location:index.php?page=edit&id=$id");
die;  
}
// elseif ($FILES['news_image']['size'] > 370000) {
//     $_SESSION['error'] = 'Photo size must be less than 3M!';
// header("location:index.php?page=edit&id=$id");
// die;
// }

// elseif (strlen($news_title) && $news_title > 10 ) {
//     $_SESSION['error'] = 'title phải dưới 200 ký tự';
// header("location:index.php?page=edit&id=$id");
// die;
// }

$sql = "UPDATE news SET
 news_name='$news_name',
--  news_image='$news_image',
 news_ingredient='$news_ingredient',
 news_price='$news_price',
 news_quantity='$news_quantity'
  where news_id= '$id'";


$query = mysqli_query($conn,$sql);
header('location:index.php');

}

?>
<div class="card-body">
    <form method="POST" enctype="multipart/form-data">
        <?php 
    if(isset($_SESSION['error'])){
        echo '<p style=color:red>'.$_SESSION['error'].'</p>' ;
        unset($_SESSION['error']);
    }
    ?>
        <div class="form-group">
            <label class="form-label" for="name">Name</label>
            <input type="text" value="<?= $row_up['news_name'] ?>" name="news_name" id="" class="form-input"
                placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label class="form-label" for="ingredient">Ingredient</label>
            <input type="text" value="<?= $row_up['news_ingredient'] ?>" name="news_ingredient" id="" class="form-input"
                placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label class="form-label" for="price">Price</label>
            <input type="text" value="<?= $row_up['news_price'] ?>" name="news_price" id="" class="form-input"
                placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label class="form-label" for="quantity">Quantity</label>
            <input type="text" value="<?= $row_up['news_quantity'] ?>" name="news_quantity" id="" class="form-input"
                placeholder="" aria-describedby="helpId">
        </div>
        <button class="btn" name="submit" type="submit">EDIT</button>
    </form>
</div>