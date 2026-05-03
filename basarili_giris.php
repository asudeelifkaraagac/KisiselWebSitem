<?php
session_start();

// Giriş yapılmamışsa login'e gönder
if (!isset($_SESSION['kullanici'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Başarılı Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5 text-center">
    <h2>Hoş Geldiniz, <?= htmlspecialchars($_SESSION['kullanici']) ?>!</h2>
    <a href="hakkimda.html" class="btn btn-secondary mt-3">Ana Sayfaya Dön</a>
    <a href="logout.php" class="btn btn-danger mt-3">Çıkış Yap</a>
</div>
</body>
</html>

