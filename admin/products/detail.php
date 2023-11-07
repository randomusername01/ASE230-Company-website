<?php
require '../../lib/JsonCRUD.php';
require 'Product.php';
require_once('../../settings.php');

$jsonCrud = new JsonCRUD(APP_PATH.'/data/data.json');
$productId = $_GET['index'] ?? null;

$productData = $jsonCrud->readByIndex($productId);
$product = Product::fromArray($productData);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Details</title>
</head>
<body>
<h1>Product Details</h1>
<?php if($product): ?>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($product->name); ?></p>
    <p><strong>Description:</strong> <?php echo htmlspecialchars($product->description); ?></p>
    <p><strong>Applications:</strong> <?php echo htmlspecialchars(implode(', ', $product->applications)); ?></p>
    <a href="edit.php?id=<?php echo htmlspecialchars($productId); ?>">Edit</a>
    <a href="delete.php?id=<?php echo htmlspecialchars($productId); ?>">Delete</a>
<?php else: ?>
    <p>Product not found.</p>
<?php endif; ?>
<a href="index.php">Back to List</a>
</body>
</html>
