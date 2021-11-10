<?php include("topbit.php");

    $name_type = mysqli_real_escape_string($dbconnect, $_POST['typeID']);

    $find_sql = "SELECT * FROM `details`
    JOIN types ON (details.typeID = types.typeID)
    WHERE 'Name' LIKE '%$name_type%' OR 'types' LIKE '%$name_type%' 
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