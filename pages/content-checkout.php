<div class="content">
    <div class="container">
        <ul class="nav-tabs">
            <li class="nav-item">
                <a href="./cart.php" class="nav-link">1. Your order</a>
            </li>
            <li class="nav-item nav-item-active">
                <a href="./checkout.php" class="nav-link nav-link-active">2. Checkout</a>
            </li>
        </ul>
        <div class="checkout">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-6">
                        <div class="item">
                            <label for="name" class="checkout-label">Your name</label>
                            <sup class="checkout-dancer">*</sup>
                        </div>
                        <input type="text" class="checkout-input" id="name" required>
                    </div>
                    <div class="col l-6">
                        <div class="item">
                            <label for="phone" class="checkout-label">Phone number</label>
                            <sup class="checkout-dancer">*</sup>
                        </div>
                        <input type="text" class="checkout-input" id="phone" required>
                    </div>
                    <div class="col l-6">
                        <div class="item">
                            <label for="time" class="checkout-label">Delivery time</label>
                            <sup class="checkout-dancer">*</sup>
                        </div>
                        <select class="checkout-input checkout-select" id="time" required>
                            <option value="asap">As soon as possible</option>
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
                        <div class="checkout-drop-title">Drop-off options</div>
                        <div class="checkout-drop-list">
                            <div class="checkout-drop-item">
                                <input type="radio" class="checkout-drop-radio" checked id="hand-to-me">
                                <label for="hand-to-me" class="checkout-drop-label">Hand it to me</label>
                            </div>
                            <div class="checkout-drop-item">
                                <input type="radio" class="checkout-drop-radio" id="at-door">
                                <label for="at-door" class="checkout-drop-label">Leave it at my door</label>
                            </div>
                        </div>
                    </div>
                    <div class="col l-12">
                        <h5 class="checkout-eelivery">
                            Delivery address
                        </h5>
                    </div>
                    <div class="col l-6">
                        <div class="item">
                            <label for="city" class="checkout-label">City</label>
                            <sup class="checkout-dancer">*</sup>
                        </div>
                        <select class="checkout-input checkout-select" id="city" required>
                            <option value="asap">As soon as possible</option>
                            <option value="new-york">Can Tho</option>
                        </select>
                    </div>
                    <div class="col l-6">
                        <div class="item">
                            <label for="address" class="checkout-label">Address</label>
                            <sup class="checkout-dancer">*</sup>
                        </div>
                        <input type="text" class="checkout-input" id="address required"
                            placeholder="Street, Apartment number or suite">
                    </div>
                    <div class="col l-12">
                        <div class="checkout-note">
                            <label for="cmt" class="checkout-note-label">
                                <span class="checkout-note-badge">Note</span>Additional comments
                            </label>
                            <textarea class="checkout-note-text" id="cmt" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="col l-6">
                        <h2 class="payment-title">Cash on delivery</h2>
                        <div class="payment-form">
                            <input type="radio" class="payment-radio" checked id="payment">
                            <label for="payment" class="payment-label">Hand it to me</label>
                        </div>
                        <h2 class="payment-title">Online payment</h2>
                        <div class="payment-form">
                            <input type="radio" class="payment-radio" id="online">
                            <label for="onlinet" class="payment-label">Pay with:&nbsp;&nbsp;&nbsp;
                            </label>
                            <img class="payment-img" src="./img/online.png" alt="">
                        </div>
                        <button class="payment-btn" type="submit">Complete order</button>
                    </div>
                    <div class="col l-6">
                        <div class="your-total">
                            <div class="your-total-container">
                                <h2 class="your-total-title">Your total</h2>
                                <div class="your-total-item">
                                    <span class="your-total-heading">Subtotal:</span>
                                    <span class="your-total-price">$43.97</span>
                                </div>
                                <div class="your-total-item">
                                    <span class="your-total-heading">SDelivery:</span>
                                    <span class="your-total-price">$6.00</span>
                                </div>
                                <div class="your-total-item">
                                    <span class="your-total-heading">Total:</span>
                                    <span class="your-total-price">$49.97</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>