<?php
include 'db.php';

if (isset($_POST['p_name'])) {
    $p_name = $_POST['p_name'];
    $sql = "INSERT INTO orders (product_name) VALUES ('$p_name')";
    if (mysqli_query($conn, $sql)) {
        echo "Uğurlu";
    } else {
        echo "Xəta: " . mysqli_error($conn);
    }
}
?>