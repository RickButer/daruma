<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/how_to_use_a_daruma.css">
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
    <div class="container">
        <div class="explanation">
            <div class="step_1">
                Step 1:
            </div>
            <div class="text">
                Buy your Daruma doll in the beginning of a new year. At this stage the doll has eyes without pupils.
            </div>
        </div>
        <div class="photo_container">
            <img class="photo" src="images/step_1.jpg" />
        </div>
    </div>
    <script src="js/how_to_use_a_daruma.js"></script>
</body>

</html>