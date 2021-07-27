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
                        <b>Tags</b>:
                        <?php echo $find_rs['steamspy_tags']; ?>

                        <br />
						
						<b>Price</b>:
                        <?php echo '$', $find_rs['price']; ?>

                        <br />
                        
						<b>Developer</b>:
                        <?php  echo $find_rs['developer']; ?>

                        <br />

                        <b>Rating</b>:
                        <?php echo(round(($find_rs['positive_ratings'] / ($find_rs['positive_ratings'] + $find_rs['negative_ratings'])) * 100).'% Positive'); ?>
                        
                        <br />
                        <br />

                        <b>Description</b>:
                        <?php echo $find_rs['detailed_description']; ?>
                    </p>

                </div> <!-- results -->

                <br />

                <?php
                    
                    } // end results 'do'

                    while
                        ($find_rs=mysqli_fetch_assoc($find_query));

                } // end else

                ?>