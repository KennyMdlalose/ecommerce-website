<?php
include('database.php'); // Include database connection

// Get product id from URL
$product_id = $_GET['id'];

// Delete product from the database
$sql = "DELETE FROM products WHERE product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);
$stmt->execute();

echo "Product deleted successfully!";
header("Location: home.php"); // Redirect back to admin products page
?>
<script>
    if (!confirm("Are you sure you want to delete this product?")) {
        window.history.back();  // If the user cancels, go back to the previous page
    }
</script>