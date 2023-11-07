<?php
require '../../lib/JsonCRUD.php';
require_once('../../settings.php');

$jsonCrud = new JsonCRUD(APP_PATH.'/data/data.json');
$products = $jsonCrud->read();

echo '<a href="create.php">Create a New Product</a>';
foreach ($products as $index => $details) {

    if (isset($details['Name'])) {
        ?>
        <div>
            <h1><?= htmlspecialchars($details['Name']) ?></h1>
            <a href="detail.php?index=<?= $index ?>">View Details</a> |
            <a href="edit.php?index=<?= $index ?>">Edit</a> |
            <a href="delete.php?index=<?= $index ?>">Delete</a>
        </div>
        <hr />
        <?php
    }
}
?>
