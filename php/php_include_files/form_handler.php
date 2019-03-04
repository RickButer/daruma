<?php
        $firstname = $_GET["costumer_firstname"]; //html name
        $lastname = $_GET["costumer_lastname"]; //html name
        $email = $_GET["costumer_email"]; //html name
        $costumer_password = $_GET["costumer_password"]; //html name
        $login_name = $_GET["costumer_login"]; //html name
        //SELECT * FROM users WHERE user_email = '$user_email', user_pwe = '$userpw'
        include "db_connection.php";
        try { //database name only!
                $sql = "INSERT INTO costumers (firstname, lastname, email, user_password, login_name)
                VALUES ('$firstname', '$lastname', '$email', '$costumer_password', '$login_name')";
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "New record created successfully";
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        $conn = null;
        header("Location: ../../index.php");
?>