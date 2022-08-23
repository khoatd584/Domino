<?php
$keyword = '';
if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
}
$sql = "SELECT * FROM news WHERE news.news_name LIKE '%" . $keyword . "%'";
$query = mysqli_query($conn, $sql);
?>

<div class="content">
    <div class="grid wide">
        <h2 class="name-food">Pizza</h2>
        <div class="home-product">
            <div class="row sm-gutter">
                <?php
                while ($row = mysqli_fetch_assoc($query)) { ?>
                    <a href="content.php?id=<?= $row['news_id'] ?>">
                        <div class="col l-3">
                                <div class="home-product-item">
                                    <a href="#" class="home-product-item-link">
                                        <div class="home-product-item__img" style="background-image: url(./admin/image/<?= $row['news_image'] ?>);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">
                                                <?= $row['news_name'] ?>
                                            </h4>
                                            <p class="home-product-item__element">
                                                <?= $row['news_ingredient'] ?>
                                            </p>
                                            <div class="home-product-item__price-cart">
                                                <span class="home-product-item__price"><?= $row['news_price'] ?>đ</span>
                                                <a href="./xuly-cart.php?news_id=<?php echo $row['news_id'] ?>" name="addtocart"  class="home-product-item__cart">
                                                    +
                                                    <ion-icon class="home-product-item__cart-icon" name="cart-outline">
                                                    </ion-icon>
                                                </a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                        </div>
                    </a>
                <?php }
                ?>
            </div>
        </div>

    </div>
</div>