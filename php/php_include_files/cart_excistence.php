<?php
    if (isset($_SESSION['login_name'])){
        $cartId = 'id="shopping_box_true"';

    }else{
        $cartId = 'id="shopping_box_false"';
    }

    if (isset($_SESSION['role'])){
        if ($_SESSION['role'] == 'admin'){
            $admin = 'id="admin_true"';
        }
    }else{
        $admin = 'id="admin_false"';
    }
?>
