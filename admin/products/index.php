<?php
    // INDEX.php Shows all the existing products in a list.
require 'products.php';
require_once('../../settings.php');

$products=readJSONFile(APP_PATH.'/data/KeyProducts_Services.JSON');

$index=0;
foreach($products as $productname => $details){
    ?>
        <div>
            <h1><?= $productname ?></h1>
            <a href="detail.php?index=<?= $productname ?>">View Details</a>
        </div>
        <hr />
    <?php
    $index++;
}

