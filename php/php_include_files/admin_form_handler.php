<?php
include "db_connection.php";

        $name = $_GET["name"]; //html name
        $description = $_GET["description"]; //html name
        $item_type = $_GET["item_type"]; //html name
        $price = $_GET["price"]; //html name
        $photo = $_GET["photo"]; //html name
        $gender =  $_GET["gender"]; //html name
        $brand =  $_GET["brand"]; //html name
        $stationary =  $_GET["stationary"]; //html name
        $size =  $_GET["size"]; //html name
    
        

        try { //database name only!
                $sql = "INSERT INTO daruma_items (name, description, item_type, price, photo, male_female, iphone_samsung, agenda_postcard, size)
                VALUES ('$name', '$description', '$item_type', '$price', '$photo', '$gender', '$brand', '$stationary', '$size')";
                
                $conn->exec($sql);
                echo "New record created successfully";
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;
    
        header("Location: admin_page.php");


?>