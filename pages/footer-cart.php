<footer class="footer">
    <div class="grid wide">
        <div class="row">
            <div class="col l-2-4">
                <div class="footer__logo-img">
                    <img src="./img/logo.png" alt="">
                </div>
            </div>
            <div class="col l-2-4">
                <h3 class="footer__heading">
                    Join us
                </h3>
                <ul class="footer__list">
                    <li class="footer__item">
                        <a href="#" class="footer__item-link">Careers</a>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__item-link">Restaurants</a>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__item-link">Become a Courier</a>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__item-link">About</a>
                    </li>
                </ul>
            </div>
            <div class="col l-2-4">
                <h3 class="footer__heading">
                    Let us help you
                </h3>
                <ul class="footer__list">
                    <li class="footer__item">
                        <a href="#" class="footer__item-link">Help Center</a>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__item-link">Support</a>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__item-link">Contacts</a>
                    </li>
                </ul>
            </div>
            <div class="col l-2-4">
                <h3 class="footer__heading">
                    Follow us
                </h3>
                <ul class="footer__list">
                    <li class="footer__item">
                        <a href="#" class="footer__item-link">Facebook</a>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__item-link">Twitter</a>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__item-link">Instagram</a>
                    </li>
                </ul>
            </div>
            <div class="col l-2-4">
                <h3 class="footer__heading">
                    Download our app
                </h3>
                <div class="download__app">
                    <a href="#" class="download__app-item">
                        <ion-icon class="download__app-img download__app-img-apple" name="logo-apple">
                        </ion-icon>
                        <div class="download__app-name">
                            <span class="download__app-subtitle">Download on the</span>
                            <span class="download__app-title">App Store</span>
                        </div>
                    </a>
                    <a href="#" class="download__app-item">
                        <img src="./img/google-play.png" alt="" class="download__app-img">
                        <div class="download__app-name">
                            <span class="download__app-subtitle">Download on the</span>
                            <span class="download__app-title">Google Play</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <p class="footer__text">© All rights reserved. Made by <a href="#">Dang Khoa</a></p>
        </div>
    </div>
</footer>
<div class="modal-account js-modal">
    <div class="modal-account--container js-modal-conteiner">
        <div class="account-header">
            <ul class="account__list">
                <li class="account__header-item ">
                    <a href="#" class="account__header-link account__header-link-sign-in tab active">
                        <ion-icon class="account__header-link-icon" name="lock-open-outline"></ion-icon>
                        <span class="account__header-link-title">Sign in</span>
                    </a>
                </li>
                <li class="account__header-item">
                    <a href="#" class="account__header-link account__header-link-sign-up tab">
                        <ion-icon class="account__header-link-icon" name="person-outline"></ion-icon>
                        <span class="account__header-link-title">Sign up</span>
                    </a>
                </li>
            </ul>
            <button type="button" class="btn-close js-modal-close">
                <ion-icon class="btn-close--icon" name="close-outline"></ion-icon>
            </button>
        </div>
        <div class="account-content">
            <form class="account-form-sign-in ctx activeC" action="">
                <div class="form-item">
                    <label class="form-label" for="email">Email address</label>
                    <div class="form-control">
                        <input type="email" class="form-input" id="email" placeholder=dangkhoa@example.com required>
                    </div>
                </div>
                <div class="form-item">
                    <label class="form-label" for="pass">Password</label>
                    <div class="form-control">
                        <input type="password" class="form-input" id="pass" required>
                    </div>
                </div>
                <div class="form-save">
                    <div class="form-forgot">
                        <a class="form-forgot" href="#">Forgot password?</a>
                    </div>
                </div>
                <button class="btn" type="submit">Sign in</button>
            </form>
            <form class="account-form-sign-up ctx" action="">
                <div class="form-item">
                    <label class="form-label" for="name">Full name</label>
                    <div class="form-control">
                        <input type="text" class="form-input" id="name" placeholder="Tong Dang Khoa" required>
                    </div>
                </div>
                <div class="form-item">
                    <label class="form-label" for="email">Email address</label>
                    <div class="form-control">
                        <input type="email" class="form-input" id="email" placeholder=dangkhoa@example.com required>
                    </div>
                </div>
                <div class="form-item">
                    <label class="form-label" for="pass">Password</label>
                    <div class="form-control">
                        <input type="password" class="form-input" id="pass" required>
                    </div>
                </div>
                <div class="form-item">
                    <label class="form-label" for="pass">Confirm password</label>
                    <div class="form-control">
                        <input type="password" class="form-input" id="pass" required>
                    </div>
                </div>
                <button class="btn" type="submit">Sign in</button>
            </form>
        </div>
    </div>
</div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
<script nomodule src="https://unkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
<script src="./js/account.js"></script>
</body>

</html>