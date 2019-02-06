<?php
    include "php/php_include_files/db_connection.php";

    $user_email = $_POST['email'];
    $user_password = $_POST['user_password'];


    $result = "SELECT *
               FROM costumers 
               WHERE email = '$user_email' 
               AND user_password = '$user_password'";

    $db_result = $conn->query($result);

    if ($db_result->rowCount() != 0){
        foreach($db_result as $row){
            $login_name = $row['login_name'];
            $role = $row['role'];
            $costumer_id = $row['costumer_id'];

        }       
        session_start();
        $_SESSION['login_name'] = $login_name;
        $_SESSION['role'] = $role;
        $_SESSION['costumer_id'] = $costumer_id;
        header("location: welcome_page.php");

    }
    else 
    {
        header("location: login_page.php?error=");        
    }

?>