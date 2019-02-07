<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/shopping_cart.css">
    <title>
        <?php 
    if(isset($_SESSION['login_name'])) {
        echo 'welcome ' . $_SESSION['login_name'];
    }else{
        echo 'daruma shop';
    }
   ?>
    </title>
</head>

<body>
    <?php include 'php/php_include_files/header.php';?>
    <div class="shopping_title_container">
        <p>Welcome to your personal shopping cart
            <?php echo $_SESSION['login_name']?>
        </p>
    </div>
    <?php
    
    include "php/php_include_files/shopping_cart_handler.php";
    
    ?>
    
</body>

</html>