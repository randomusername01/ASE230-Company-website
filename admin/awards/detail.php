<?php
require 'awards.php';
require_once('../../settings.php');

// used for troubleshooting.
// echo APP_PATH.'/data/awards.csv';

// getting the awards.
$content=readCSVFile(APP_PATH.'/data/awards.csv');
$award=$content[$_GET['index']];
// used for troubleshooting
// print_r($content);
?>
    <a href="index.php"><b>Return to Awards Index</b></a>
    <h3><?= $award['0'].'</h3><br /><p>'.$award['1'] ?></p>

<?php