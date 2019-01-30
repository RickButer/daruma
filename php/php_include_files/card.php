<?php

    //CARD.PHP

    include "db_connection.php";        

    $sql_querie = "SELECT photo, name, description, price, stock FROM `daruma_items`";
    
    $db_result = $conn->query($sql_querie);  

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
?>
