<?php
$conn = mysqli_connect("localhost", "root", "", "gsstore_db");
if (!$conn) {
    die("Bağlantı xətası: " . mysqli_connect_error());
}
?>