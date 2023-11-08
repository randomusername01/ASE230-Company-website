<?php
// DELETE.php: delete an existing item.


require_once('../../settings.php');
require_once('awards.php');
require_once('csvhelper.php');

// getting the awards.
$content=readCSVFile(APP_PATH.'/data/awards.csv');
$award=$content[$_GET['index']];
// used for troubleshooting
// print_r($content);

if(count($_POST)>0){
    // build line to slide in.
    $updatedLine=$_POST['year'].',"'.$_POST['achievement'].'"'.PHP_EOL;

    // if file cannot be deleted:
   If(deleteFromCSV(APP_PATH.'/data/awards.csv',$_GET['index'],$updatedLine)=='false'){
    // TODO: add error
    
   }else{
    // delete successful.
    // return to index.
		header('location: index.php');
   }
}else{
    // If there is nothing to post when button is hit, stay on page.
    ?>
    <a href="index.php"><b>Awards Index</b></a>
    <h2>Are you sure you wish to delete the following information?</h2>
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>?index=<?= $_GET['index'] ?>" method="POST">
                <input type="text" name="year" placeholder="Year" value="<?= $award[0]?>" /><br />
                <textarea name="achievement" placeholder="Achievement"><?= $award[1] ?></textarea><br />
                <button type="submit" a href="index.php">Delete</button>
            </form>
            <?php 

}