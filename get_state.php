<?php
require_once("dbcontroller.php");
 $db_handle = new DBController();





if(!empty($_POST["client_name"])) {
	$query ="SELECT * FROM location_table WHERE client_name = '".$_POST["client_name"]."' ";
	$results = $db_handle->runQuery($query);
?>
	<option value="">Select location</option>

<?php	foreach($results as $location) {
?>
	<option value="<?php echo $location["location"]; ?>"><?php echo $location["location"]; ?></option>
<?php
	}
}
?>