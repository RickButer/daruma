<?php
    include "php/php_include_files/db_connection.php";

    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $result = "SELECT firstname
               FROM costumers
               WHERE email = '$user_email' 
               AND user_password = '$user_password'";

    $db_result = $conn->query($result);

    if ($db_result->rowCount() != 0){
        foreach($db_result as $row){
            $firstname = $row['firstname'];
        }
        
        echo "Welcome " . $firstname;
        header("Location:index.php");
    }
    else 
    {
        echo 'The username or password is incorrect!';
        header("location:login_page.php");
    }

?>