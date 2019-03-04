<?php
session_start();
?>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/welcome.css">

<body>
    <div class="welcome_container">
        <div class="welcome_text">
            <p>
                <?php echo 'Login succesfull <br /><br />welcome ' . $_SESSION['login_name'];?>
            </p>
        </div>
        <div id="counter"></div>
        <div class="welcome_logo"><img src="images/png/register_daruma.png" /></div>
    </div>
<script src="js/redirect.js"></script>
</body>
</head>

</html>