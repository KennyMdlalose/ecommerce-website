<?php
// search.php

// Database connection details
$servername = "localhost"; // Replace with your database server
$username = "root";        // Replace with your database username
$password = "";            // Replace with your database password
$dbname = "database.php"; // Replace with your actual database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search query from the URL
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Sanitize the search query
$query = "%" . $conn->real_escape_string($query) . "%";

// Prepare SQL query to search products by name or description
$sql = "SELECT * FROM products WHERE name LIKE ? OR description LIKE ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $query, $query);
$stmt->execute();
$result = $stmt->get_result();

// Initialize an array to store the product details
$products = [];

// Fetch the products and add them to the array
while ($row = $result->fetch_assoc()) {
    $products[] = [
        'name' => $row['name'],
        'price'=> $row['price'],
        'description' => $row['description'],
        'image' => $row['image_url'], // Assuming there's a column for product image URL
    ];
}

// Return the results as JSON
echo json_encode($products);

// Close the statement and connection
$stmt->close();
$conn->close();
?>
