<?php
require '../../lib/JsonCRUD.php';
require 'Product.php';
require_once('../../settings.php');

$jsonCrud = new JsonCRUD(APP_PATH.'/data/data.json');
$productId = $_GET['index'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $productId !== null) {

    if ($jsonCrud->delete($productId)) {

        header('Location: index.php');
        exit();

    } else {

        $errorMessage = "Error deleting product.";

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Product</title>
</head>
<body>
<h1>Delete Product</h1>
<?php if(isset($errorMessage)): ?>
    <p style="color: red;"><?php echo $errorMessage; ?></p>
<?php endif; ?>
<form action="delete.php?index=<?php echo htmlspecialchars($productId); ?>" method="post">
    <p>Are you sure you want to delete this product?</p>
    <button type="submit">Delete</button>
    <a href="index.php">Cancel</a>
</form>
</body>
</html>
