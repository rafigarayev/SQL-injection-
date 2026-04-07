<?php
// Baza bağlantısı
$db = mysqli_connect("localhost", "root", "", "gala");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['mail_unvan'];
    $parol = $_POST['sifre'];

    // SQL Injection-a açıq olan zəif sorğu
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$parol'";
    
    $run = mysqli_query($db, $sql);

    if ($run && mysqli_num_rows($run) > 0) {
        // Giriş uğurludursa, ana səhifəyə yönləndir
        header("Location: index.php");
        exit();
    } else {
        echo "<h2 style='color:red; text-align:center;'>Məlumatlar yanlışdır!</h2>";
        echo "<p style='text-align:center;'><a href='login.php'>Geri qayıt</a></p>";
    }
}
?>