<?php
include "db_connection.php";  

session_start();

// $product_id = $_GET["added"]; //
// $_SESSION['costumer_id'];
// $customer_id = $_SESSION['costumer_id'];

// $query = "INSERT INTO orders (product_id, orders.costumer_id) VALUES ($product_id, $customer_id)";

// $conn->query($query);


if (isset($_SESSION['costumer_id'])) {
    $product_id = $_GET["added"]; 
    $_SESSION['costumer_id'];
    $customer_id = $_SESSION['costumer_id'];

    $query = "INSERT INTO orders (product_id, orders.costumer_id) VALUES ($product_id, $customer_id)";

    $conn->query($query);
    header("Location: ../../card_page.php");
    } else {
    header("Location: ../../card_page.php?alert=0");
}


?>