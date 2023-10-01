<?php
// Adds a single new entry to the initial page.

if(count($_POST)>0){	
	print_r($_POST);

	//1. Open the file in append mode.
	$fp=fopen('awards.csv','a+');
	// Appendone line to the file. Added double quotations around the achievement incase it contains a single quotation within it.
	fwrite($fp,$_POST['year'].',"'.$_POST['achievement'].'"'.PHP_EOL);
	// close the file
	fclose($fp);
}
?>

<a href="index.php">Go to Awards index</a>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
	<input type="text" name="year" placeholder="Year" /><br />
	<textarea name="achievement" placeholder="Achievement" /></textarea><br />
	<button type="submit" a href="index.php">Create</button>
</form>
