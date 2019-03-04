<?php
session_start();
?>
<head>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<div class="container_title">
    <p>welcome to your admin page
        <?php echo $_SESSION['login_name']?>
        <br /><br />add products here
    </p>
</div>
<div class="admin_form">
    <form action="php/php_include_files/admin_form_handler.php" method="GET">

            <div><label>product name</label><br />
            <input class="input_types" type="text" id="first_name" name="name" autofocus></div>

            <div><label>description</label><br />
            <input class="input_types" type="text" id="last_name" name="description"></div>

            <div><label>item_type</label><br />
            <input class="input_types" type="text" id="costumer_email" name="item_type" >0= dolls. 1=clothing. 2=phonecases 3=stationary</div>

            <div><label>price</label><br />
            <input class="input_types" type="text" id="costumer_login" name="price" >integer!!!</div>

            <div><label>photo</label><br />
            <input class="input_types" type="text" id="costumer_password" name="photo" >example: images/example.jpg</div>

            <div><label>gender</label><br />
            <input class="input_types" type="text" id="costumer_login" name="gender" >male or female or null</div>

            <div><label>brand</label><br />
            <input class="input_types" type="text" id="costumer_login" name="brand" >iphone or samsung or null</div>

            <div><label>stationary</label><br />
            <input class="input_types" type="text" id="costumer_login" name="stationary" >agenda or postcard or null</div>

            <div><label>size</label><br />
            <input class="input_types" type="text" id="costumer_login" name="size" >S or M or L or null</div><br />

        <div class="button_box">
            <div><button type="submit" id="submit_style">go</button></div><div><a href="/projects/daruma/index.php">back home</a></div>
        </div>
    </form>

</div>