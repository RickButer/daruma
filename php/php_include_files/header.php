<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre" rel="stylesheet">
    <title>Welcome to daruma shop</title>
</head>

<body>
        <div class="header_container">
            <div class="logo_container">
                <img src="images/png/daruma_logo.png" />
                <a href="index.php" class="daruma_text">Daruma Shop</a>
            </div>
            <div class="searchbar_container">
                <input type="text" class="navbar_search" placeholder="find your daruma item quick...">
            </div>
            <div class="link_container">
                <a href="#">What is a daruma</a>
                <a href="#">How to use a daruma</a>
                <a href="card_page.php">shop</a>
                <div class="dropdown_my_account">
                    <button class="dropbtn">my account</button>
                    <div class="dropdown_my_account_content">
                        <a href="#">login</a>
                        <a href="form_page.php">register</a>
                        <a href="#">my page</a>
                    </div>
                </div>
            </div>
        </div>

    
    <!-- <div class="dropdown_filter">
        <img id="dropdown_arrow" onclick="filter_dropdown()" src="images/png/down_arrow.png" />
    </div> -->
    <script src="js/header.js"></script>
</body>

</html>