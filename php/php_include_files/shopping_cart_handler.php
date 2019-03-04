<?php
include "db_connection.php";   
$costumer_id = $_SESSION['costumer_id'];
$query = "SELECT
photo,
daruma_items.product_id,
name,
description,
price,
costumers.costumer_id
FROM
daruma_items
INNER JOIN orders ON daruma_items.product_id = orders.product_id
INNER JOIN costumers ON orders.costumer_id = costumers.costumer_id
WHERE costumers.costumer_id = $costumer_id";
// $conn->query($query); 
$db_result = $conn->query($query);  
foreach ($db_result as $row)
{
echo
'<div class="full_container">' . 
        '<div class="item_container">' . 
            '<div class="shopping_cart_box">' . 
                '<img class="total_image"src="' . $row['photo'] . '"/>' . 
                '<div class="total_name"><p>' . $row['name'] . '</p></div>' . 
                '<div class="total_description"><p>' . $row['description'] . '</p></div>' . 
                '<div class="total_price"><p>€ ' . $row['price'] . '</p></div>' . 
                '<a href="php/php_include_files/delete_handler.php?delete=' . $row['product_id'] . '" class="delete"><img src="images/png/delete.png"/></a>' . 
            '</div>' . 
        '</div>' .
    '</div>';
}
$conn = null; 
?>