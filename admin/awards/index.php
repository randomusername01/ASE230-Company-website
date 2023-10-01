<?php
// show list of available items

require '../../lib/readCSV.php';
require_once('../../settings.php');

// used for troubleshooting.
// echo APP_PATH.'/data/awards.csv';

// getting the awards.
$content=readCSVFile(APP_PATH.'/data/awards.csv');

// used for troubleshooting
// print_r($content);
$index=0;
?>
<div>
    <a href="create.php">Add new award</a>
</div>
<?php 
foreach($content as $award){
    ?>
        <div>
            <h3><?= $award['0'].' '.$award['1'] ?></h3><a href="detail.php?index=<?= $index ?>">View in detail</a>
        </div>
        <hr />
    <?php
    $index++;
}