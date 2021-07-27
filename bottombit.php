        <div class="box side">
           
            <h2><a href="addentry.php">Add an App</a> | 
               <a class="side" href="showall.php">Show All</a></h2>
            
            <form class="searchform" method="post"
            action="search.php" enctype="multipart/form-data">

                <input class="search" type="text" name="dev_name"
                size="40" value="" required placeholder="App Name / Dev Name"/>

                <input class="submit" type="submit"
                name="find_game_name" value="&#xf002;" />

            </form>
            
            
            <div class="advanced-frame">
                
                <h2>Advanced Search</h2>
                
                <form class="searchform" method="post"
                action="advanced.php" enctype="multipart/form-data">
                    
                    <p>Form goes here</p>

                    <input class="submit advanced-button" type="submit"
                    name="advanced" value="Search &nbsp; &#xf002;" />

                </form>

                </div> <!-- / advanced frame -->
            
        </div> <!-- / side bar -->
        
        <div class="box footer">
            CC GTT 20XX
        </div> <!-- / footer -->
                
        
    </div> <!-- / wrapper -->
    
            
</body>