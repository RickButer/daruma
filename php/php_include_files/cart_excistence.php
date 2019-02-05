<?php


if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == "admin"){
        $cartId = 'id="shopping_box_true"';

    }else{
        $cartId = 'id="shopping_box_false"';
    }
}
else {
    $cartId = 'id="shopping_box_false"';
}

?>