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
        <?php echo 'welcome ' . $_SESSION['login_name'] . " role: " . $_SESSION['role'];?>
    </title>
</head>

<body>
       <?php include 'php/php_include_files/header.php';?>
    <div class="card_filter_container">
        
        <div class="filter_box">
            <div class="filter_header">
                <p>what are you looking for?</p>
            </div>
            <form action="">
                <p>select type</p>
                <div class="dropdown">
                    <select id="type_select" onchange="cardStyleChange(this.value)">
                        <option value="type=0">daruma dolls</option>
                        <option value="type=1">clothing</option>
                        <option value="type=2">phone cases</option>
                        <option value="type=3">stationary</option>
                    </select>
                </div>
                <p>price</p>
                <div class="dropdown">
                    <select id="price_select" onchange="cardStyleChangePrice(this.value)">
                        <option value="????????????????">low to high</option>
                        <option value="????????????????">high to low</option>
                    </select>
                </div><br />
                <div class="sections"><p>clothing</p></div>
                <div class="dropdown">
                    <select id="size_select" onchange="cardStyleChange(this.value)">
                        <option value="size=S">small</option>
                        <option value="size=M">medium</option>
                        <option value="size=L">large</option>
                    </select>
                </div><br />
                <div class="dropdown">
                    <select id="gender_select" onchange="cardStyleChangeGender(this.value)">
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div><br />
                <div class="sections"><p>phone cases</p></div>
                <div class="dropdown">
                    <select id="phone_select" onchange="cardStyleChangePhone(this.value)">
                        <option value="iphone">iphone</option>
                        <option value="samsung">samsung</option>
                    </select>
                </div><br />
                <div class="sections"><p>stationary</p></div>
                <div class="dropdown">
                    <select id="stationary_select" onchange="cardStyleChangeStationary(this.value)">
                        <option value="agenda">agenda</option>
                        <option value="postcard">postcard</option>
                    </select>
                </div>
            </form>
        
        </div>
        <div id="cards" class="card_container">
            <?php include 'php/php_include_files/card.php';?>
        </div>
    </div>
    <script src="js/card.js"></script>
</body>

</html>