<?php include("topbit.php");

    $find_sql = "SELECT * FROM `gamedata`
    JOIN genres ON (gamedata.GenreID = genres.GenreID) 
    JOIN devs ON (gamedata.DevID = devs.DevID)
    JOIN descriptions ON (gamedata.appid = descriptions.appID)
    LIMIT 1000
    ";
    $find_query = mysqli_query($dbconnect, $find_sql);
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);
?>

			<div class="box main">
				<h2>All Results</h2>
				
				<?php include("results.php")?>
			
            </div> <!-- / main -->

<?php include("bottombit.php") ?>