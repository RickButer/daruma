<?php

    //CARD.PHP

    include "db_connection.php";        

    $sql_querie = "SELECT photo, name, description, price FROM `daruma_items`";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {   
        echo 
        
        '<div class="card_box">' . 
        '<img src="' . $row['photo'] . '" class="card_photo" />' . 
        '<div class="card_name">' . $row['name'] . '</div>' . 
        '<div class="card_description">' . $row['description'] . '</div>' . 
        '<div class="card_price">€' . $row['price'] . '</div>' . 
        '</div>';
    }       

    $conn = null;  
?>
