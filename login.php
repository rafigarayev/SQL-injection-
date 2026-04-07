<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title>GSStore - Giriş</title>
    <style>
        body { font-family: sans-serif; background: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .login-box { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); width: 300px; text-align: center; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #0084ff; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #0073e6; }
    </style>
</head>
<body>
    <div class="login-box">
        <h3>Giriş</h3>
        <form action="yoxla.php" method="POST">
            <input type="text" name="mail_unvan" placeholder="E-poçt" required>
            <input type="password" name="sifre" placeholder="Parol" required>
            <button type="submit">Daxil ol</button>
        </form>
    </div>
</body>
</html>