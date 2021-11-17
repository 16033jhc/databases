        <div class="box side">
           
            <h2><a href="addentry.php">Add an App</a> | 
               <a class="side" href="showall.php">Show All</a></h2>
            
            <form class="searchform" method="post"
            action="search.php" enctype="multipart/form-data">

                <input class="search" type="text" name="typeID"
                size="40" value="" required placeholder="App Name / Dev Name"/>

                <input class="submit" type="submit"
                name="find_game_name" value="&#xf002;" />

            </form>
            
            
            <div class="advanced-frame">
                
                <h2>Add New Data</h2>
                
                <form class="add_data" action="insertData.php" method="post" name="insert">
                    <fieldset id="fields">
                        <legend>Insert New Entry</legend>

                            <label for="nameText">Name:</label></br>
                            <input name="nameText" id="nameText" type="text"></input>
                            
                            </br>

                            <label for="typeText">Type(s):</label></br>
                            <input name="typeText" id="typeText" type="text"></input>
                            
                            </br>

                            <label for="healthNumber">Health Points:</label>
                            <input name="healthNumber" id="healthNumber" type="number"></input>
                            
                            </br>
                            
                            <label for="attackNumber">Attack Points:</label>
                            <input name="attackNumber" id="attackNumber" type="number"></input>
                            
                            </br>
                            
                            <label for="defenseNumber">Defense Points:</label>
                            <input name="defenseNumber" id="defenseNumber" type="number"></input>
                            
                            </br>
                           
                            <label for="Sp_attackNumber">Special Attack Points:</label>
                            <input name="Sp_attackNumber" id="Sp_attackNumber" type="number"></input>
                            
                            </br>
                           
                            <label for="Sp_defenseNumber">Special Defense Points:</label>
                            <input name="Sp_defenseNumber" id="Sp_defenseNumber" type="number"></input>
                            
                            </br>
                            
                            <label for="speedNumber">Speed Points:</label>
                            <input name="speedNumber" id="speedNumber" type="number"></input>
                            
                            </br>
                            
                            <label for="generationNumber">Generation:</label>
                            <input name="generationNumber" id="generationNumber" type="number"></input>
                    
                            </br>
                            
                            <label for="legendaryBoolean">Legendary Status:</label>
                            <input name="legendaryBoolean" id="legendaryBoolean" type="checkbox"></input>
                    
                    </fieldset>

                    <fieldset>
                        <input type="submit" value="Submit Data" class="button">
                        <input type="reset" value="Reset" class="button">
                    </fieldset>
                </form>

                </div> <!-- / advanced frame -->
            
        </div> <!-- / side bar -->
        
        <div class="box footer">
            CC GTT 20XX
        </div> <!-- / footer -->
                
        
    </div> <!-- / wrapper -->
    
            
</body>