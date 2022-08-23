
<?php
$cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
?>
<?php
$content = '';
$user = $_SESSION['user'];
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $id_user = $user['id'];
    $phone = $_POST['phone'];
    $time = $_POST['time'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $ship = $_POST['ship'];
    $total = $_POST['total'];
    
    $query = mysqli_query($conn, "INSERT INTO orders(id_user,name,phone,time,email,address,note,ship,total) VALUES ('$id_user','$name','$phone','$time','$email','$address','$note','$ship','$total')");

    if($query) {
        $id_order = mysqli_insert_id($conn);
        foreach($cart as $key => $value) {
            mysqli_query($conn, "INSERT INTO order_detail(id_order,name_pro,quantity,price) VALUES('$id_order','$value[news_name]','$value[quantity]','$value[news_price]')");
        }
        unset($_SESSION['cart']);
        header('location: ./index.php');
    }
}
?>

<div class="content">
    <div class="container">
        <ul class="nav-tabs">
            <li class="nav-item">
                <a href="./cart.php" class="nav-link">1. Đơn hàng của bạn</a>
            </li>
            <li class="nav-item nav-item-active">
                <a href="./checkout.php" class="nav-link nav-link-active">2. Thanh toán</a>
            </li>
        </ul>
        <div class="checkout">
            <div class="grid wide">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col l-6">
                            <div class="item">
                                <label for="name" class="checkout-label">Tên của bạn</label>
                                <sup class="checkout-dancer">*</sup>
                            </div>
                            <input type="text" class="checkout-input" value="<?php echo $user['name'] ?>" id="name" name="name" required>
                        </div>
                        <div class="col l-6">
                            <div class="item">
                                <label for="phone" class="checkout-label">Số điện thoại</label>
                                <sup class="checkout-dancer">*</sup>
                            </div>
                            <input type="text" class="checkout-input" id="phone" name="phone" required>
                        </div>
                        <div class="col l-6">
                            <div class="item">
                                <label for="time" class="checkout-label">Thời gian giao hàng</label>
                                <sup class="checkout-dancer">*</sup>
                            </div>
                            <select name="time" class="checkout-input checkout-select" id="time" required>
                                <option value="Sớm nhất có thể">Sớm nhất có thể</option>
                                <option value="11:00am">by 11:00 AM</option>
                                <option value="11:15am">by 11:15 AM</option>
                                <option value="11:30am">by 11:30 AM</option>
                                <option value="11:45am">by 11:45 AM</option>
                                <option value="12:00pm">by 12:00 PM</option>
                                <option value="12:15pm">by 12:15 PM</option>
                                <option value="12:30pm">by 12:30 PM</option>
                                <option value="12:45pm">by 12:45 PM</option>
                                <option value="1:00pm">by 1:00 PM</option>
                            </select>
                        </div>
                        <div class="col l-6">
                            <div class="item">
                                <label for="email" class="checkout-label">Email</label>
                                <sup class="checkout-dancer">*</sup>
                            </div>
                            <input type="email" class="checkout-input" id="email" name="email" value="<?php echo $user['email'] ?>" required>
                        </div>
                        <div class="col l-12">
                            <h5 class="checkout-eelivery">
                                Địa chỉ giao hàng
                            </h5>
                        </div>
                        <div class="col l-6">
                            <div class="item">
                                <label for="address" class="checkout-label">Địa chỉ nhà</label>
                                <sup class="checkout-dancer">*</sup>
                            </div>
                            <input type="text" class="checkout-input" id="address required" name="address" placeholder="Đường phố, căn hộ hoặc dãy phòng">
                        </div>
                        <div class="col l-12">
                            <div class="checkout-note">
                                <label for="cmt" class="checkout-note-label">
                                    <span class="checkout-note-badge">Ghi chú</span>Ý kiến khác
                                </label>
                                <textarea name="note" class="checkout-note-text" id="cmt" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="col l-6">
                            <h2 class="payment-title">Thanh toán khi nhận hàng</h2>
                            <div class="payment-form">
                                <input type="radio" name="ship" value="Thanh toán khi nhận hàng" class="payment-radio" checked id="payment">
                                <label for="payment" class="payment-label">Hand it to me</label>
                            </div>
                            <h2 class="payment-title">Thanh toán trực tuyến</h2>
                            <div class="payment-form">
                                <input type="radio" class="payment-radio" id="online">
                                <label for="onlinet" class="payment-label">Thanh toán bằng:&nbsp;&nbsp;&nbsp;
                                </label>
                                <img class="payment-img" src="./img/online.png" alt="">
                            </div>
                            <button type="submit" name="dathang" class="payment-btn">Hoàn tất đặt hàng</button>
                        </div>
                        <div class="col l-6">
                        <?php $total_cart = 0; ?>
                        <?php $total = 0; ?>
                        <?php $ship = 30000 ?>
                    <?php foreach ($cart as $key => $value) :
                        $total_cart += ((int)$value['quantity'] * (int)$value['news_price']);
                        $total = $total_cart + $ship;
                    ?>
                            <div class="cart-item">
                                <div class="product">
                                    <a href="#" class="product-link">
                                        <img src="./admin/image/<?php echo $value['news_image'] ?>" alt="" class="product-img">
                                    </a>
                                    <div class="info">
                                        <h3 class="info-title">
                                            <a href="#" class="info-link"><?php echo $value['news_name'] ?></a>
                                        </h3>
                                        <span class="info-price"><?php echo number_format($value['news_price'], 0, '.', '.') ?></span>
                                    </div>
                                </div>
                                <div class="quantity">
                                <label for="quantity1" class="quantity-label">SL</label>
                                        <span class="quantity-label"><?php echo $value['quantity'] ?></span> 
                                </div>
                            </div>
                    <?php endforeach ?>
                                <div class="your-total">
                                <div class="your-total-container">
                                    <h2 class="your-total-title">Tổng tiền của bạn</h2>
                                    <div class="your-total-item">
                                        <span class="your-total-heading">Tổng đơn hàng:</span>
                                        <input name="total" value="<?php echo number_format($total_cart, 0, '.', '.') ?>đ" class="your-total-price"></input>
                                    </div>
                                    <div class="your-total-item">
                                        <span class="your-total-heading">Phí vận chuyển:</span>
                                        <input name="total" value="<?php echo number_format($ship, 0, '.', '.') ?>đ" class="your-total-price"></input>
                                    </div>
                                    <div class="your-total-item">
                                        <span class="your-total-heading">Thành tiền:</span>
                                        <input name="total" value="<?php echo number_format($total, 0, '.', '.') ?>đ" class="your-total-price"></input>
                                    </div>
                                    <?php $content .="<p>Tên khách hàng: ".$user['name']."</p>"; ?>
                                    <?php 
                                    foreach ($cart as $key => $value) {
                    $content .="<p>Sản phẩm: ".$value['news_name']."</p>";
                    $content .="<image src=./admin/image/".$value['news_image'].">";
                    $content .="<p>Số lượng: ".$value['quantity']."</p>";
                    $content .="<p>Tổng tiền: ".number_format($total, 0, '.', '.')."đ"."</p>";
                                    }
                    ?>
                    <?php  ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>