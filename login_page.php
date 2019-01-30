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

        <form class="loginForm" action="loginFormHandler.php" method="POST">
        <label for="username">Email:</label>
        <input type="email" id="username" name="user_email" autofocus required/>

        <label for="password">Password:</label>
        <input type="password" id="password" name="user_password" required/>

        <button type="submit" class="submitButton">Login</button>
        <p>no account yet? <a href="form_page.php">make one here quick</a></p>
    </form>
        </div>

    </div>

</body>

</html>