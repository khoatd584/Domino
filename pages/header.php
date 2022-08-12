<?php
require_once './db/connection.php';
?>
<?php
$user = (isset($_SESSION['user'])) ? $user = $_SESSION['user'] : [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="main">
        <header class="header">
            <div class="grid wide">
                <div class="navbar">
                    <div class="navbar-address">
                        <a href="./index.php" class="navbar-logo">
                            <img src="./img/logo.png" alt="">
                            </ư>
                            <div class="navbar-location navbar-location-margin navbar-location-after">
                                <ion-icon class="navbar-location--icon" name="location-outline"></ion-icon>
                                <a class="navbar-location--link navbar-location--link-margin" href="#">New York</a>
                                <ion-icon name="chevron-down-outline"></ion-icon>
                                <ul class="navbar-location-drogdown">
                                    <li>
                                        <a class="location-item" href="#">Los Angeles</a>
                                    </li>
                                    <li>
                                        <a class="location-item" href="#">Chicago</a>
                                    </li>
                                    <li>
                                        <a class="location-item" href="#">Houston</a>
                                    </li>
                                    <li>
                                        <a class="location-item" href="#">Philadelphia</a>
                                    </li>
                                    <li>
                                        <a class="location-item" href="#">San Diego</a>
                                    </li>
                                    <li>
                                        <a class="location-item" href="#">Miami</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#" class="navbar-location">Cuisine
                                <div class="navbar-location-drogdown-menu">
                                    <div class="menu-food">
                                        <img src="./img/burger.svg" alt="">
                                    </div>
                                </div>
                            </a>
                    </div>
                    <div class="navbar-search">
        <form action="./index.php?trang" method="POST" class="search-container">
            <!-- <ion-icon class="navbar-search-icon" name="search-outline"></ion-icon> -->
            <input class="search-submit" type="submit" name="search" value="Search">
            <input type="text" class="search-input" name="keyword" placeholder="What do you need?">
            <input class="all-submit" type="submit" name="keyword" value="All">
        </form>
    </div>
                    <div class="navbar-toolbar">
                        <!-- <a href="./search.php" class="navbar-toolbar--icon">
                            <ion-icon class="navbar-search-icon" name="search-outline"></ion-icon>
                        </a> -->
                        <div class="navbar-location navbar-toolbar--icon navbar-toolbar--icon-margin">
                            <ion-icon class="navbar-user-icon" name="person-outline"></ion-icon>
                            <?php if (isset($user['name'])) { ?>
                                <ul class="navbar-location-drogdown">
                                    <li>
                                        <a class="location-item location-item-active" href="#"><?php echo $user['name'] ?></a>
                                    </li>
                                    <li>
                                        <a class="location-item" href="./logout.php">Logout</a>
                                    </li>
                                </ul>
                            <?php } else { ?>
                                <ul class="navbar-location-drogdown">
                                    <li>
                                        <a class="location-item" href="./sign-in.php">Sign in</a>
                                    </li>
                                    <li>
                                        <a class="location-item" href="./sign-up.php">Sign up</a>
                                    </li>
                                </ul>
                            <?php } ?>
                        </div>
                        <a href="./cart.php" class="navbar-toolbar--icon">
                            <ion-icon class="navbar-cart-icon" name="cart-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <header class="banner">
            <div class="banner-food">
                <div class="banner-food-img">
                    <img src="./img/banner.jpg" alt="">
                </div>
                <div class="banner-food-name">
                    <h1>Domino's Pizza</h1>
                </div>
            </div>
        </header>