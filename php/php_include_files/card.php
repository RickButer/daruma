<?php
   
    //CARD.PHP

    include "db_connection.php";   

    // if (isset($_GET['price'])){
    //     $price = $_GET['price'];
    //     $querie = "SELECT photo, name, description, price, stock FROM `daruma_items` ORDER BY price ASC";
    // }else{
    //     $querie = "SELECT photo, name, description, price, stock FROM `daruma_items`";
    // }

    if(isset($_GET['type'])){
        $category = $_GET['type'];
        $querie = "SELECT photo, name, description, price, stock FROM `daruma_items` WHERE item_type = $category";        
    }else{
        $querie = "SELECT photo, name, description, price, stock FROM `daruma_items`";
    }

    $db_result = $conn->query($querie);  

    foreach ($db_result as $row)
    {
       $stockColor = checkStockAmount($row['stock']); //var for my stock id function

        echo 
        
        '<div class="card_box">' . 
        '<img src="' . $row['photo'] . '" class="card_photo" />' . 
        '<div class="card_name">' . $row['name'] . '</div>' . 
        '<div class="card_description">' . $row['description'] . '</div>' .
        '<div class="card_price_stock_box">' .  
        '<div class="card_price">€' . $row['price'] . '</div>' . 
        '<div id="' . $stockColor . '">stock: ' . $row['stock'] . '</div>' . 
        '</div>' . 
        '</div>';
    }       

    $conn = null; 
    
    function checkStockAmount($amount){
        $stockID = '';
        if ($amount <= 5) {
            $stockID = 'card_stock_low';
        }   
        else {
            $stockID = 'card_stock_high';
        }
        return $stockID;
    }
    // SELECT photo, name, description, price, stock FROM `daruma_items` ORDER BY price ASC

?>
