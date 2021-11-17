<?php

    require 'config.php';
    $dbconnect=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

    $name = $_REQUEST['nameText'];
    $types = $_REQUEST['typeText'];
    $health = $_REQUEST['healthNumber'];
    $attack = $_REQUEST['attackNumber'];
    $defense = $_REQUEST['defenseNumber'];
    $sp_attack = $_REQUEST['Sp_attackNumber'];
    $sp_defense = $_REQUEST['Sp_defenseNumber'];
    $speed = $_REQUEST['speedNumber'];
    $totalPoints = $health + $attack + $defense + $sp_attack +$sp_defense + $speed;
    $generation = $_REQUEST['generationNumber'];
    $legendary = $_REQUEST['legendaryBoolean'];

    $sql = "INSERT INTO details (Name, types, Total, HP, Attack, Defense, Sp. Atk, Sp. Def, Speed, Generation, Legendary)
            VALUES ('$name', '$types', '$totalPoints', '$health', '$defense', '$sp_attack', '$sp_defense', '$speed', '$generation', '$legendary')"; 

    
    // Checks record was added
    
    if($dbconnect->query($sql) == true){
        echo "New entry added";
    } else{ 
        echo "Error: " . $sql . "<br>" . $dbconnect->error;
    }

?>