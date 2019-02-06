<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/card_page.css">
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

    <head>
        <link rel="stylesheet" type="text/css" href="css/card_details_page.css">
    </head>

    <body>
        <?php include 'php/php_include_files/card_details.php'?>
    
    </body>

</html>