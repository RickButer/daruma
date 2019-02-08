<?php
   
    //CARD.PHP

    include "db_connection.php";   
    $product_id = $_GET["aapje"];
    $querie = "SELECT * FROM daruma_items WHERE product_id = '$product_id'";
    
    // $addedSelection = false;

    // //start size query
    // if(isset($_GET['size'])){
    //     $size = $_GET['size'];
    //     $querie .= " WHERE size = $size";  
    //     $addedSelection = true; 
        // "SELECT photo, name, description, price, stock FROM `daruma_items` WHERE size = $size";
    // }

    //start type query
    if(isset($_GET['type'])){
        $category = $_GET['type'];
        $querie .= " WHERE item_type = $category";
            // $querie .= " AND item_type = $category";            
        }else{           
            $querie = $querie;         
        }        
      
    
    $db_result = $conn->query($querie);  

    foreach ($db_result as $row)
    {
       $stockColor = checkStockAmount($row['stock']); //var for my stock id function

        echo 

        '<div class="container">' . 
        '<div class="photo_holder"><img src="' . $row['photo'] . '"/></div>' . 
        '<div class="details_box">' . 
        '<div class="name"><p><br /><br /> ' . $row['name'] . '</p></div>' . 
        '<div class="description"><p><br /><br />' . $row['description'] . '</p></div>' . 
        '<div class="price"><p>Price: € ' . $row['price'] . '</div>' . 
        '<div class="stock"><p>Stock: ' . $row['stock'] . '</p></div>' . 
        '<div class="details_img"><a href="card_page.php"><img src="images/png/red_arrow.png"/></a></div>' . 
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
