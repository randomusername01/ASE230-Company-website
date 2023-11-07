<?php
require '../../lib/JsonCRUD.php';
require 'Product.php';
require_once('../../settings.php');

$jsonCrud = new JsonCRUD(APP_PATH.'/data/data.json');
$productId = $_GET['index'] ?? null;

$productData = $jsonCrud->readByIndex($productId);
$product = Product::fromArray($productData);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $productName = $_POST['name'];
    $productDescription = $_POST['description'];
    $productApplications = $_POST['applications'];

    $product->name = $productName;
    $product->description = $productDescription;
    $product->applications = $productApplications;

    if ($jsonCrud->update($productId, $product->toArray())) {

        header('Location: index.php');
        exit();

    } else {

        $errorMessage = "Error updating product.";
    }
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit Product</title>
    </head>
<body>
    <h1>Edit Product</h1>
<?php if(isset($errorMessage)): ?>
    <p style="color: red;"><?php echo $errorMessage; ?></p>
<?php endif; ?>
<form action="edit.php?index=<?php echo htmlspecialchars($productId); ?>" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($product->name); ?>" required><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required><?php echo htmlspecialchars($product->description); ?></textarea><br>

    <label for="applications">Applications:</label>
    <textarea id="applications" name="applications" required><?php

        echo htmlspecialchars(json_encode($product->applications, JSON_PRETTY_PRINT));
        ?></textarea><br>

    <button type="submit">Update Product</button>
</form>
    <a href="index.php">Back to product list</a>
</body>
</html>