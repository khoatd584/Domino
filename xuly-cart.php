<?php
require_once './db/connection.php';
?>
<?php
if(isset($_GET['news_id'])) {
    $news_id = $_GET['news_id'];
}
$action = (isset($_GET['action']) ? $_GET['action'] : 'add');
$quantity = (isset($_GET['quantity'])) ? $_GET['quantity'] : 1;
$query = mysqli_query($conn, "SELECT * FROM news WHERE news_id = $news_id");
if($query) {
    $product = mysqli_fetch_assoc($query);
}
$item = [
    'news_id'=>$product['news_id'],
    'news_name'=>$product['news_name'],
    'news_image'=>$product['news_image'],
    'news_price'=>$product['news_price'],
    'quantity'=>$quantity
];
if($action == 'add') {
    if(isset($_SESSION['cart'][$news_id])) {
        $_SESSION['cart'][$news_id]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$news_id] = $item;
    }
}
if($action == 'update') {
    $_SESSION['cart'][$news_id]['quantity'] = $quantity;
}
if($action == 'delete-cart') {
    unset($_SESSION['cart'][$news_id]);
}
header('location: cart.php');
echo "<pre>";
print_r($_SESSION['cart']);
?>