<?php include("topbit.php");

    $name_type = mysqli_real_escape_string($dbconnect, $_POST['search_bnt']);

    $find_sql = "SELECT * FROM details, types JOIN types ON (details.typeID = types.typeID) WHERE 'details.Name' LIKE '%$name_type%'";
    $find_query = mysqli_query($dbconnect, $find_sql);
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);
?>

			<div class="box main">
				<h2>All Results</h2>
				
				<?php 
                    include("results.php")
                ?>
			
            </div> <!-- / main -->

<?php include("bottombit.php") ?>