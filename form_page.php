<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <script src="js/header.js"></script>
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
    <div class="form_container">
        <div class="gif_box">
            <div class="daruma_image_gif"><img src="images/daruma_gif.gif" /></div>
        </div>
        <div class="form_box">
            <form action="php/php_include_files/form_handler.php" method="GET">
                <div>
                    <h1>make your own daruma account</h1>
                </div>
                <div class="register_button_box">
                    <div class="register_box">
                        <div><label id="first_name_style">first name*</label><br />
                            <input class="input_types" type="text" id="first_name" name="costumer_firstname" autofocus
                                required></div>
                        <div><label id="last_name_style">last name</label><br />
                            <input class="input_types" type="text" id="last_name" name="costumer_lastname"></div>

                        <div><label id="email_style">email*</label><br />
                            <input class="input_types" type="email" id="costumer_email" name="costumer_email" required></div>

                        <div><label id="choose_login_style">choose a login name*</label>
                            <input class="input_types" type="text" id="costumer_login" name="costumer_login" required></div>

                        <div><label id="password_style">choose a password*</label>
                            <input class="input_types" type="password" id="costumer_password" name="costumer_password"
                                required></div>
                    </div>
                    <div class="button_box">
                        <div><button type="submit" id="submit_style">Lets get started!</button></div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
</body>
</html>