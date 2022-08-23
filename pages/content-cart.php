<?php
$cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
?>
<div class="content">
    <div class="container">
        <ul class="nav-tabs">
            <li class="nav-item nav-item-active">
                <a href="./cart.php" class="nav-link nav-link-active">1. Đơn hàng của bạn</a>
            </li>
            <li class="nav-item">
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <a href="./checkout.php" class="nav-link">2. Thanh toán</a>
                <?php
                } else {
                ?>
                    <a href="./sign-in.php" class="nav-link">
                    2. Thanh toán
                    </a>
                <?php
                }
                ?>
            </li>
        </ul>
        <div class="cart">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-8">
                    <?php $total = 0; ?>
                    <?php foreach ($cart as $key => $value) :
                        $total += ((int)$value['quantity'] * (int)$value['news_price']);
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
                                        <span class="info-price"><?php echo number_format($value['news_price'], 0, '.', '.') ?>đ</span>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <form action="./xuly-cart.php">
                                        <input type="hidden" name="action" value="update">
                                        <input type="hidden" name="news_id" value="<?php echo $value['news_id'] ?>">
                                        <label for="quantity1" class="quantity-label">Số lượng</label>
                                        <input id="quantity1" type="number" name="quantity" class="quantity-input" value="<?php echo $value['quantity'] ?>" min="1" max="50">
                                        <button class="quantity-input-cn" type="submit">Cap nhat</button>
                                    </form>
                                    <a href="./xuly-cart.php?news_id=<?php echo $value['news_id'] ?>&action=delete-cart" class="quantity-btn" type="button">
                                        <ion-icon class="quantity-icon" name="close-circle-outline"></ion-icon>
                                        <span class="quantity-remove">Remove</span>
                                    </a>
                                </div>
                            </div>
                            <?php endforeach?>
                        </div>
                    <div class="col l-4">
                        <div class="total">
                            <div class="total-container">
                                <div class="total-title">
                                    <h3 class="total-name">Thành tiền</h3>
                                    <h4 class="total-into-money">
                                        <?php echo number_format($total, 0, '.', '.') ?>đ
                                    </h4>
                                </div>
                                <div class="total-note">
                                    <label for="cmt" class="total-note-label">
                                        <span class="total-note-badge">Ghi chú</span>Ý kiến khác
                                    </label>
                                    <textarea class="total-note-text" id="cmt" rows="5"></textarea>
                                </div>
                                <?php
                                if (isset($_SESSION['user'])) {
                                ?>
                                    <a href="./checkout.php" class="total-link">
                                        <ion-icon class="total-link-icon" name="briefcase-outline"></ion-icon>
                                        Thanh toán
                                    </a>
                                <?php
                                } else {
                                ?>
                                    <a href="./sign-in.php" class="total-link">
                                        <ion-icon class="total-link-icon" name="briefcase-outline"></ion-icon>
                                        Thanh toán
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>