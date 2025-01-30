<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM orders WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: orders.php");
    } else {
        echo "Error deleting order: " . mysqli_error($conn);
    }
}
?>
