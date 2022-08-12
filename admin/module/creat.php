<?php
session_start();
if(isset($_POST['submit'])){
    $news_name = $_POST['news_name'];

    $news_image = $_FILES['news_image']['name'];
    $news_image_tmp = $_FILES['news_image']['tmp_name'];
    
    $news_ingredient = $_POST['news_ingredient'];
    $news_price = $_POST['news_price'];
    $news_quantity = $_POST['news_quantity'];
// VALIDATE FORM
if(
    empty($news_name) || 
    empty($news_image) || 
    empty($news_ingredient) ||
    empty($news_price) || 
    empty($news_quantity) 
){
  $_SESSION['error'] = 'Please fill in the product information completely!';
header('location:index.php?page=creat');
die;  
}elseif ($FILES['news_image']['size'] > 370000) {
    $_SESSION['error'] = 'Photo size must be less than 3M!';
header('location:index.php?page=creat');
die;
}

// elseif (strlen($news_name) && $news_name > 10 ) {
//     $_SESSION['error'] = 'Name phải dưới 200 ký tự';
// header('location:index.php?page=creat');
// die;
// }

$sql = "INSERT INTO news(news_name,news_image,news_ingredient,news_price,news_quantity)"
."VALUES('$news_name','$news_image','$news_ingredient','$news_price','$news_quantity')";
$query = mysqli_query($conn,$sql);
move_uploaded_file($news_image_tmp,'image/'.$news_image);
header('location:index.php');

}

?>
<div class="card-body">
    <h3 class="cart-header">Add Product</h3>
    <form method="POST" enctype="multipart/form-data">
        <?php 
    if(isset($_SESSION['error'])){
        echo '<p style=color:red>'.$_SESSION['error'].'</p>' ;
        unset($_SESSION['error']);
    }
    ?>
        <div class="form-group">
            <label class="form-label" for="name">Name</label>
            <input type="text" name="news_name" id="" class="form-input" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label class="form-label" for="image">Image</label>
            <input type="file" name="news_image" id="" class="form-input" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label class="form-label" for="ingredient">Ingredient</label>
            <input type="text" name="news_ingredient" id="" class="form-input" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label class="form-label" for="price">Price</label>
            <input type="text" name="news_price" id="" class="form-input" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label class="form-label" for="quantity">Quantity</label>
            <input type="text" name="news_quantity" id="" class="form-input" placeholder="" aria-describedby="helpId">
        </div>
        <button class="btn" name="submit" type="submit">ADD</button>
    </form>
</div>