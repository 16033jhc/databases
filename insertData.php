<?php

    require 'config.php';
    $dbconnect=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

    $name = $_REQUEST['nameText'];
    $types =  mysqli_real_escape_string($dbconnect, $_REQUEST['typeText']);
    $health = $_REQUEST['healthNumber'];
    $attack = $_REQUEST['attackNumber'];
    $defense = $_REQUEST['defenseNumber'];
    $sp_attack = $_REQUEST['Sp_attackNumber'];
    $sp_defense = $_REQUEST['Sp_defenseNumber'];
    $speed = $_REQUEST['speedNumber'];
    $totalPoints = $health + $attack + $defense + $sp_attack +$sp_defense + $speed;
    $generation = $_REQUEST['generationNumber'];
    $legendary = $_REQUEST['legendaryBoolean'];


    $types_sql = "SELECT * FROM types WHERE types.types LIKE '$types'";
    $typequery = mysqli_query($dbconnect, $types_sql);
    $type_rs = mysqli_fetch_assoc($typequery);
    $type_count = mysqli_num_rows($typequery);

    if ($type_count > 0) {
        $typesID = $type_rs['typeID'];
    }
    else {
        $typeID = mysqli_real_escape_string($dbconnect, $_REQUEST['typeID']);
        $add_type_sql = "INSERT INTO 'types' ('typeID','types') VALUES (null,'$types')";
        $add_type_query = mysqli_query($dbconnect, $add_type_sql);
    
        $new_types_sql = "SELECT * FROM 'types' WHERE 'types' LIKE '$types'";
        $new_typequery = mysqli_query($dbconnect, $new_types_sql);
        $new_type_rs = mysqli_fetch_assoc($new_typequery);

        $typesID = $new_type_rs['typeID'];
    }

    $sql = "INSERT INTO details (Name, typeID, Total, HP, Attack, Defense, Sp_Atk, Sp_Def, Speed, Generation, Legendary)
            VALUES ('$name', '$typesID', '$totalPoints', '$health', '$attack', '$defense', '$sp_attack', '$sp_defense', '$speed', '$generation', '$legendary')"; 

    
    // Checks record was added
    
    if($dbconnect->query($sql) == true){
        echo "New entry added";
    } else{ 
        echo "Error: " . $sql . "<br>" . $dbconnect->error;
    }

?>