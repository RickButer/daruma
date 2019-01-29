<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/card_page.css">
    <title>Document</title>
</head>

<body>
    <?php include 'php/php_include_files/header.php';?>
    <div class="card_filter_container">
        <div class="filter_box">
           
            <div class="filter_header"><p>what are you looking for?</p></div>

        </div>
        <div class="card_container">
            <?php include 'php/php_include_files/card.php';?>
        </div>
    </div>
    <script src="js/header.js"></script>
</body>

</html>