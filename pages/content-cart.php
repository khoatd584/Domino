<div class="content">
    <div class="container">
        <ul class="nav-tabs">
            <li class="nav-item nav-item-active">
                <a href="./cart.php" class="nav-link nav-link-active">1. Your order</a>
            </li>
            <li class="nav-item">
                <a href="./checkout.php" class="nav-link">2. Checkout</a>
            </li>
        </ul>
        <div class="cart">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-8">
                        <div class="cart-item">
                            <div class="product">
                                <a href="#" class="product-link">
                                    <img src="./img/sp01.jpg" alt="" class="product-img">
                                </a>
                                <div class="info">
                                    <h3 class="info-title">
                                        <a href="#" class="info-link">Pizza Vegano Delux</a>
                                    </h3>
                                    <span class="info-price">$12.99</span>
                                </div>
                            </div>
                            <div class="quantity">
                                <label for="quantity1" class="quantity-label">Quantity</label>
                                <input id="quantity1" type="number" class="quantity-input" value="1" min="1">
                                <button class="quantity-btn" type="button">
                                    <ion-icon class="quantity-icon" name="close-circle-outline"></ion-icon>
                                    <span class="quantity-remove">Remove</span>
                                </button>
                            </div>
                        </div>
                        <div class="cart-item">
                            <div class="product">
                                <a href="#" class="product-link">
                                    <img src="./img/sp02.jpg" alt="" class="product-img">
                                </a>
                                <div class="info">
                                    <h3 class="info-title">
                                        <a href="#" class="info-link">
                                            Pizza Peperoni with Tomatoes
                                        </a>
                                    </h3>
                                    <span class="info-price">$14.99</span>
                                </div>
                            </div>
                            <div class="quantity">
                                <label for="quantity1" class="quantity-label">Quantity</label>
                                <input id="quantity1" type="number" class="quantity-input" value="1" min="1">
                                <button class="quantity-btn" type="button">
                                    <ion-icon class="quantity-icon" name="close-circle-outline"></ion-icon>
                                    <span class="quantity-remove">Remove</span>
                                </button>
                            </div>
                        </div>
                        <div class="cart-item">
                            <div class="product">
                                <a href="#" class="product-link">
                                    <img src="./img/sp03.jpg" alt="" class="product-img">
                                </a>
                                <div class="info">
                                    <h3 class="info-title">
                                        <a href="#" class="info-link">
                                            Pizza with Salami and Olives
                                        </a>
                                    </h3>
                                    <span class="info-price">$15.99</span>
                                </div>
                            </div>
                            <div class="quantity">
                                <label for="quantity1" class="quantity-label">Quantity</label>
                                <input id="quantity1" type="number" class="quantity-input" value="1" min="1">
                                <button class="quantity-btn" type="button">
                                    <ion-icon class="quantity-icon" name="close-circle-outline"></ion-icon>
                                    <span class="quantity-remove">Remove</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col l-4">
                        <div class="total">
                            <div class="total-container">
                                <div class="total-title">
                                    <h3 class="total-name">Total</h3>
                                    <h4 class="total-into-money">$43.97
                                    </h4>
                                </div>
                                <div class="total-note">
                                    <label for="cmt" class="total-note-label">
                                        <span class="total-note-badge">Note</span>Additional comments
                                    </label>
                                    <textarea class="total-note-text" id="cmt" rows="5"></textarea>
                                </div>
                                <a href="./checkout.php" class="total-link">
                                    <ion-icon class="total-link-icon" name="briefcase-outline"></ion-icon>
                                    Proceed to Checkout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>