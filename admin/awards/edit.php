<?php
require '../../lib/readCSV.php';
require_once('../../settings.php');

$content=readCSVFile(APP_PATH.'/data/awards.csv');
$item=$content[$_GET['index']];


?>

<a href="index.php">Go to Awards index</a>
<form action="<? $_SERVER['PHP_SELF'] ?>?index=<?= $_GET['index']?> method="POST">
    <div>
        <label>Year</label><br />
        <input type="text" name="year" value="<?= $item['year'] ?>" />
    </div>
    <div>
        <label>Achievement</label><br />
        <textarea type="text" name="achievement" /><?= $item['achievement'] ?></textarea>
    </div>
    <button type="submit">Edit item</button>
</form>