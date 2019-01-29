<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <script src="js/header.js"></script>
    <title>Document</title>
</head>

<body>
    <?php include 'php/php_include_files/header.php';?>
    <div class="form_container">
        <div class="form_box">
        <form action="php/php_include_files/form_handler.php" method="GET">

            <div><h1>make your own daruma account</h1></div><br />

            <div><label for="name">first name</label></div>
            <div><input type="text" id="first_name" name="costumer_firstname" autofocus required><div><br />

            <div><label for="name">last name</label></div>
            <div><input type="text" id="last_name" name="costumer_lastname"></div><br />

            <div><label for="email">email</label></div>
            <div><input type="email" id="costumer_email" name="costumer_email" required></div><br />

            <div><label for="login_name">choose a login name</label></div>
            <div><input type="text" id="costumer_login" name="costumer_login" required></div><br />

            <div><label for="password">choose a password</label></div>
            <div><input type="password" id="costumer_password" name="costumer_password" required></div>
            <br />
            <div><button type="submit">Lets get started!</button></div>

        </form>
    </div>
    </div>
</body>

</html>