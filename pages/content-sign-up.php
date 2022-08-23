<?php

$err = [];
if (isset($_POST['signup_submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rPassword = $_POST['rPassword'];
    
    if (empty($name)) {
        $err['name'] = 'Ban chua nhap ten';
    }
    if (empty($email)) {
        $err['email'] = 'Ban chua nhap email';
    }
    if (empty($password)) {
        $err['password'] = 'Ban chua nhap password';
    }
    if ($password != $rPassword) {
        $err['rPassword'] = 'Mat khau khong trung nhau';
    }
    if (empty($err)) {
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(name, email, password) VALUES ('$name','$email','$pass')";
        $query = mysqli_query($conn,$sql);
        if ($query) {
            header('location: ././sign-in.php');
        }
    }
    $_SESSION['id'] = mysqli_insert_id($conn);
}
?>
<div class="account-content">
    <form method="POST" class="account-form-sign-up" action="">
        <div class="form-item">
            <label class="form-label" for="name">Full name</label>
            <div class="form-control">
                <input name="name" type="text" class="form-input" id="name" placeholder="Tong Dang Khoa" required>
            </div>
            <div class="has-error">
                <span><?php echo (isset($err['name'])) ? $err['name'] : '' ?></span>
            </div>
        </div>
        <div class="form-item">
            <label class="form-label" for="email">Email address</label>
            <div class="form-control">
                <input name="email" type="email" class="form-input" id="email" placeholder=dangkhoa@example.com required>
            </div>
            <div class="has-error">
                <span><?php echo (isset($err['email'])) ? $err['email'] : '' ?></span>
            </div>
        </div>
        <div class="form-item">
            <label class="form-label" for="pass">Password</label>
            <div class="form-control">
                <input name="password" type="password" class="form-input" id="pass" required>
            </div>
            <div class="has-error">
                <span><?php echo (isset($err['password'])) ? $err['password'] : '' ?></span>
            </div>
        </div>
        <div class="form-item">
            <label class="form-label" for="pass">Confirm password</label>
            <div class="form-control">
                <input name="rPassword" type="password" class="form-input" id="pass" required>
            </div>
            <div class="has-error">
                <span><?php echo (isset($err['rPassword'])) ? $err['rPassword'] : '' ?></span>
            </div>
        </div>
        <button name="signup_submit" class="btn" type="submit">Sign up</button>
    </form>

</div>
</div>
</div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
<script nomodule src="https://unkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
</body>

</html>