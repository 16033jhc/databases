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
                    <span class="heading">
                        <?php echo $find_rs['Name']; ?>
                    </span>
                    
                    <span class="sub_heading">    
                        <p>
                            <b>Type(s)</b>:
                            <?php echo $find_rs['types']; ?>
                        </p>
                    </span>

                    <p>
                        <b>Generation</b>:
                        <?php echo $find_rs['Generation']; ?>
                    </p>

                    <p>
                        <b>Health Points</b>:
                        <?php echo $find_rs['HP']; ?>
                    </p>

                    <p>
                        <b>Attack Points</b>:
                        <?php echo $find_rs['Attack']; ?>
                    </p>

                    <p>
                        <b>Defence Points</b>:
                        <?php echo $find_rs['Defense']; ?>
                    </p>

                    <p>
                        <b>Speed Points</b>:
                        <?php echo $find_rs['Speed']; ?>
                    </p>

                    <p>
                        <b>Special Attack Points</b>:
                        <?php echo $find_rs['Sp. Atk']; ?>
                    </p>

                    <p>
                        <b>Special Defence Points</b>:
                        <?php echo $find_rs['Sp. Def']; ?>
                    </p>

                </div> <!-- results -->

                <br />

                <?php
                    
                    } // end results 'do'

                    while
                        ($find_rs=mysqli_fetch_assoc($find_query));

                } // end else

                ?>