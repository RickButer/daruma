<?php
    if (isset($_SESSION['login_name'])){
        $cartId = 'id="shopping_box_true"';

    }else{
        $cartId = 'id="shopping_box_false"';
    }

?>
