<?php
require '../../lib/readCSV.php';
require_once('../../settings.php');

// used for troubleshooting.
// echo APP_PATH.'/data/awards.csv';

// getting the awards.
$content=readCSVFile(APP_PATH.'/data/awards.csv');
$award=$content[$_GET['index']];
// used for troubleshooting
// print_r($content);
?>

    <h3><?= $award['0'].'</h3><br /><p>'.$award['1'] ?></p>
    <a href="index.php">Return to Awards Index</a>
    <a href="edit.php?index=<? $_GET['index'] ?>">Edit this item</a>
    <a href="delete.php?index=<? $_GET['index'] ?>">Delete this item</a>

<?php