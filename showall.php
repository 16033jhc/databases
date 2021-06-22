<?php include("topbit.php");

    $find_sql = "SELECT * FROM `gamedata`";
    $find_query = mysqli_query($dbconnect, $find_sql);
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);
?>
			
			<div class="box main">
				<h2>All Results</h2>
				
				<?php

                if($count < 1) {

                    ?>

                <div class="error">
                   
                    There are no results that match your query.
                    Please use the search box to try again.
                
                </div> <!-- end error -->

                <?php
                } // end no results if

                else {
                    do
                    {

                        ?>
                <!-- Results go here -->
                <div class="results">
                    <span class="sub_heading">
                        <a href="https://store.steampowered.com/app/<?php echo $find_rs['appid']; ?>/"> 
                            <?php echo $find_rs['name']; ?>
                        </a>
                    </span>

                    <br />
                    <?php echo $find_rs['genreID']; ?>
                    <?php echo $find_rs['genre']; ?>

                </div> <!-- results -->

                <br />

                <?php
                    
                    } // end results 'do'

                    while
                        ($find_rs=mysqli_fetch_assoc($find_query));

                } // end else

                ?>
			
            </div> <!-- / main -->

<?php include("bottombit.php") ?>