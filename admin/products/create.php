<?php
require '../../lib/JsonCRUD.php';
require 'Product.php';

$jsonCrud = new JsonCRUD(APP_PATH.'/data/data.json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $productName = $_POST['productName'];
    $productDescription = $_POST['productDescription'];

    $applications = [];

    if (!empty($_POST['applicationName']) && !empty($_POST['applicationDescription'])) {
        $applications[$_POST['applicationName']] = $_POST['applicationDescription'];
    }
    if (!empty($_POST['applicationName1']) && !empty($_POST['applicationDescription1'])) {
        $applications[$_POST['applicationName1']] = $_POST['applicationDescription1'];
    }

    $product = new Product($productName, $productDescription, $applications);


    $jsonCrud->create($product->toArray());


    header('Location: index.php');
    exit;
}
?>
<a href="index.php">Product Index</a>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label>Product Name</label><br />
        <input type="text" name="productName" placeholder="Product Name" />
    </div>
    <div>
        <label>Description</label><br />
        <textarea name="productDescription" placeholder="Product Description"></textarea><br />
    </div>

    <div>
    <label>Applications</label><br />
        <div>
            <label>Application Name</label><br />
            <input type="text" name="applicationName" placeholder="Application Name"/>
        </div>
        <div>
            <label>Application Description</label><br />
            <input type="text" name="applicationDescription" placeholder="Application Description"/>
        </div>
        <div>
            <label>Application Name</label><br />
            <input type="text" name="applicationName1" placeholder="Application Name"/>
        </div>
        <div>
            <label>Application Description</label><br />
            <input type="text" name="applicationDescription1" placeholder="Application Description"/>
        </div>
    </div>
    <div>
	    <button type="submit" a href="index.php">Create</button>
    </div>
</form>