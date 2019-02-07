<?php
session_start();
include "db_connection.php";

$costumer_id = $_SESSION['costumer_id'];
$error = $_GET['delete'];

$query = "DELETE FROM orders WHERE product_id = $error AND costumer_id = $costumer_id";

$conn->query($query);

header("Location: /projects/daruma/shopping_cart_page.php");

?>