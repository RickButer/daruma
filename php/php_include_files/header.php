<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body>
    <div class="header_container">
        <div class="logo_container">
            <div class="logo_image_class"><a href="index.php"><img id="header_logo_image" src="images/png/daruma_logo.png" /></a></div>
            <div class="daruma_text">Daruma™</div>
        </div>
        <div class="searchbar_container">
            <p>~your shop to happiness~</p>
        </div>
        <div class="link_container">
            <a href="what_is_a_daruma.php">What is a daruma</a>
            <a href="how_to_use_a_daruma.php">How to use a daruma</a>
            <a href="card_page.php">shop</a>
            <div class="dropdown_my_account">
                <button class="dropbtn">my account</button>
                <div class="dropdown_my_account_content">
                    <a href="login_page.php">login</a>
                    <a href="form_page.php">register</a>
                </div>
            </div>
            <?php 
            include "cart_excistence.php";
            echo '<div ' . $cartId . '>'; 
            ?>
                <div class="cart">
                    <a href="shopping_cart_page.php"><img src="images/png/shopping_cart.png"></a>
                </div>
                <div class="cart_text">
                    your cart<br />
                    <a id="destroy" href="php/php_include_files/session_destroy.php">logout</a>
                </div>
            </div>
            <?php
            include 'cart_excistence.php';
            echo '<div ' . $admin . '><a href="admin_page.php">ADMIN</a></div>';
            ?>
        </div>
    </div>
</body>
</html>