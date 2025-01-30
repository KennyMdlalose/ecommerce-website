<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM customers WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: customers.php");
    } else {
        echo "Error deleting customer: " . mysqli_error($conn);
    }
}
?>
