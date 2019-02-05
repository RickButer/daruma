<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
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
    <div class="index_container">
        <div class="index_quotes">
            <div><p>"七 転 び 八 起 き"</p></div>
            <div><p>~Fall down seven times, get up eight~</p><br /></div>
            <div class="white_space"></div>
            <div class="shop_now"><a href="card_page.php">start<br /> shopping!</a></div>
        </div>
    </div>
</body>

</html>