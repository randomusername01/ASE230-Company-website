<?php
//INDEX.php show list of available items

require 'awards.php';
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
            <h3><?= $award['0'].': '.$award['1'] ?></h3><br />
            <a href="detail.php?index=<?= $index ?>">View Detail</a> | 
            <a href="edit.php?index=<?= $index ?>">Edit</a> | 
            <a href="delete.php?index=<?= $index ?>">Delete</a>
        </div>
        <hr />
    <?php
    $index++;
}