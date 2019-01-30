<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Document</title>
</head>

<body>
    <?php include 'php/php_include_files/header.php';?>
    <div class="login_container">
        <div class="login_box">
            <div class="name_password_box">
                <form class="loginForm" action="loginFormHandler.php" method="POST">
                    <div><label for="username">Email:</label><br />
                    <input type="email" id="username" name="user_email" autofocus required /></div><br /><br /><br />

                    <div><label for="password">Password:</label><br />
                    <input type="password" id="password" name="user_password" required /></div><br /><br />

                    <div><button type="submit" class="submit_button">Login</button></div>
            </div>
            <div class="space_maker"></div>
            <div class="make_account_box">
                <a href="form_page.php"><img id="login_daruma" src="images/png/login_daruma.png"/></a>
                <div><img id="arrow_up" src="images/png/arrow_up.png"/></div>
                <div><p>no account yet?<br /> click the daruma!</p></div>
            </div>
            </form>
        </div>

    </div>
    <script src="js/index.js"></script>
</body>

</html>