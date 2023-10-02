<?php
// Adds a single new entry to the csv file.

require_once('../../settings.php');
require_once('awards.php');

if(count($_POST)>0){	
	// Write the new award as string.
	$newAward = $_POST['year'].',"'.$_POST['achievement'].'"'.PHP_EOL;
	// send New Award to be added to data file.
	addToCSVFile(APP_PATH.'/data/awards.csv',$newAward);

	header('location: index.php');
}else{

?>

<a href="index.php">Go to Awards index</a>
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
	<input type="text" name="year" placeholder="Year" /><br />
	<textarea name="achievement" placeholder="Achievement"></textarea><br />
	<button type="submit" a href="index.php">Create</button>
</form>
<?php 
}