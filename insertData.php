<form class="add_data" action="insertData.php" method="post" name="insert">
    <fieldset id="fields">
        <legend>Insert New Entry</legend>
        
        <label for="nameText">Name:</label>
        <input name="nameText" id="nameText" type="text"></input>
        
        <label for="typeText">Type(s):</label>
        <input name="typeText" id="typeText" type="text"></input>
        
        <label for="healthNumber">Health Points:</label>
        <input name="healthNumber" id="healthNumber" type="number"></input>
        
        <label for="attackNumber">Attack Points:</label>
        <input name="attackNumber" id="attackNumber" type="number"></input>
        
        <label for="defenseNumber">Defense Points:</label>
        <input name="defenseNumber" id="defenseNumber" type="number"></input>
       
        <label for="Sp_attackNumber">Special Attack Points:</label>
        <input name="Sp_attackNumber" id="Sp_attackNumber" type="number"></input>
       
        <label for="Sp_defenseNumber">Special Defense Points:</label>
        <input name="Sp_defenseNumber" id="Sp_defenseNumber" type="number"></input>
      
        <label for="speedNumber">Speed Points:</label>
        <input name="speedNumber" id="speedNumber" type="number"></input>
      
        <label for="generationNumber">Generation:</label>
        <input name="generationNumber" id="generationNumber" type="number"></input>
    </fieldset>

    <fieldset>
        <input type="submit" value="Submit Data" class="button">
        <input type="reset" value="Reset" class="button">
    </fieldset>
</form>


<?php

    require 'config.php';

    $name = $_REQUEST['nameText']
    $types = $_REQUEST['typeText']
    $health = $_REQUEST['healthNumber']
    $attack = $_REQUEST['attackNumber']
    $defense = $_REQUEST['defenseNumber']
    $sp_attack = $_REQUEST['Sp_attackNumber']
    $sp_defense = $_REQUEST['Sp_defenseNumber']
    $speed = $_REQUEST['speedNumber']
    $generation = $_REQUEST['generationNumber']

    $sql = "INSERT INTO details (Name, types, HP, Attack, Defense, Sp. Atk, Sp. Def, Speed, Generation)
            VALUES ('$name', '$types', '$health', '$defense', '$sp_attack', '$sp_defense', '$speed', '$generation')"; 

    
    // Checks record was added
    
    if($dbconnect->query($sql) == true){
        echo "New entry added";
    } else{ 
        echo "Error: " . $sql . "<br>" . $dbconnect->error;
    }

?>