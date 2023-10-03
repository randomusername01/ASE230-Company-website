<?php
// EDIT.php: Edit a line item in the file.

require_once('../../settings.php');
require_once('awards.php');

// getting the awards.
$content=readCSVFile(APP_PATH.'/data/awards.csv');
$award=$content[$_GET['index']];
// used for troubleshooting
// print_r($content);

if(count($_POST)>0){
    // build line to slide in.
    $updatedLine=$_POST['year'].',"'.$_POST['achievement'].'"'.PHP_EOL;

   If(updateCSVFile(APP_PATH.'/data/awards.csv',$_GET['index'],$updatedLine)=='false'){
    // throw error
    
   }else{
    // update successful.
    // get updated award.
    
    $content=readCSVFile(APP_PATH.'/data/awards.csv');
    $award=$content[$_GET['index']];

    ?>
    <a href="index.php"><b>Awards Index</b></a>
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>?index=<?= $_GET['index'] ?>" method="POST">
                <input type="text" name="year" placeholder="Year" value="<?= $award[0]?>" /><br />
                <textarea name="achievement" placeholder="Achievement"><?= $award[1] ?></textarea><br />
                <button type="submit" a href="index.php">Edit</button>
            </form>
            <?php 
   }
}else{
    // If there is nothing to post when button is hit, stay on page.
    ?>
    <a href="index.php"><b>Awards Index</b></a>
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) .'?index='.$_GET['index'] ?>" method="POST">
                <input type="text" name="year" placeholder="Year" value="<?= $award[0]?>" /><br />
                <textarea name="achievement" placeholder="Achievement"><?= $award[1] ?></textarea><br />
                <button type="submit" a href="index.php">Edit</button>
            </form>
            <?php 

}

