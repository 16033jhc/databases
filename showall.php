<?php include("topbit.php");

    $find_sql = "SELECT * FROM `gamedata`
    JOIN genres ON (gamedata.GenreID = genres.GenreID) 
    JOIN devs ON (gamedata.DevID = devs.DevID)
    LIMIT 1000
    ";
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
                    
                    <p>
                        <b>Genre</b>:
                        <?php echo $find_rs['genres']; ?>

                        <br />

                        <b>Developer</b>:
                        <?php  echo $find_rs['developer']; ?>

                        <br />

                        <b>Rating</b>:
                        <?php echo(round(($find_rs['positive_ratings'] / ($find_rs['positive_ratings'] + $find_rs['negative_ratings'])) * 100).'%'); ?>
                    </p>

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