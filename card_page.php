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
            <div class="filter_header">
                <p>what are you looking for?</p>
            </div><div class="white_space"></div>
            <form action="">
                <div class="options_dropdown">
                    <select name="type">
                        <option value="0">daruma dolls</option>
                        <option value="1">clothing</option>
                        <option value="2">phone cases</option>
                        <option value="3">stationary</option>
                    </select>
                </div>




            </form>
        </div>
        <div class="card_container">
            <?php include 'php/php_include_files/card.php';?>
        </div>
    </div>
</body>

</html>