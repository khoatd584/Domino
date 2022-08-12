<?php
require_once 'db/connection.php';

    if (isset($_POST['signin_submit'])) {
        $username = $_POST['username'];
        $password = ($_POST['password']);

        $sql = "SELECT * FROM users_admin WHERE username ='".$username."'AND password ='".$password."'LIMIT 1";

        $row = mysqli_query($conn,$sql);

        $count = mysqli_num_rows($row);

        if ($count > 0) {
            $_SESSION['login'] = $username;
            header("Location: index.php");
        } else {
            echo "<script>alert('Oops! Tài khoản hoặc mật khẩu không đúng')</script>";
            header("Location: login.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/account.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>
<body>
<div class="main">
    <div class="modal-account">
        <div class="modal-account--container">
            <div class="account-header">
                <ul class="account__list">
                    <li class="account__header-item ">
                        <a href="./sign-in.php" class="account__header-link account__header-link-sign-in account__header-link-active">
                            <ion-icon class="account__header-link-icon" name="lock-open-outline"></ion-icon>
                            <span class="account__header-link-title">Sign in</span>
                        </a>
                    </li>
                </ul>
                <a href="./index.php" class="btn-close">
                    <ion-icon class="btn-close--icon" name="close-outline"></ion-icon>
                </a>
            </div>
            <div class="account-content">
    <form method="POST" class="account-form-sign-in" action=''>
        <div class="form-item">
            <label class="form-label" for="email">Username</label>
            <div class="form-control">
                <input name="username" type="text" class="form-input" id="email" required>
            </div>
        </div>
        <div class="form-item">
            <label class="form-label" for="pass">Password</label>
            <div class="form-control">
                <input name="password" type="password" class="form-input" id="pass" required>
            </div>
        </div>
        <button name="signin_submit" class="btn" type="submit">Sign in</button>
    </form>

</div>
</div>
</div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
<script nomodule src="https://unkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
</body>
</html>