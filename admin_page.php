<?php
session_start();
?>
<head>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>

<div class="container_title debug">
<p>welcome to your admin page <?php echo $_SESSION['login_name']?>
</p>
</div>