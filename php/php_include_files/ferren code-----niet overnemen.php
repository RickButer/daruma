<?php 
include "db_connection.php";

function getCats(){

    $SQL_QUERIE_SELECT_ALL_CATEGORIES = "SELECT * FROM categories"; // querie (opdracht)

    $DATABASE_RESULT = mysqli_query ($db_connection, $SQL_QUERIE_SELECT_ALL_CATEGORIES); // uitslag van de query en wat terug komt van de database

    foreach($DATABASE_RESULT as $row){

        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        echo "<li><a href='#'>$cat_title</a></li>";
    }
}

//Pseudocode//

// Ik wil alle filters op een pagina hebben
// ik wil dat als je klikt op een filter, de query zich automatisch aanpast.
//  