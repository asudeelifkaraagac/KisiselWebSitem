<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email'] ?? '');
    $sifre = trim($_POST['password'] ?? '');

    $ogrenciNo = explode('@', $email)[0];

    if ($sifre === $ogrenciNo && str_ends_with($email, '@sakarya.edu.tr')) {
        // Session'a kaydet ve anasayfaya yönlendir
        $_SESSION['kullanici'] = $ogrenciNo;
        header("Location: basarili_giris.php");
        exit();
    } else {
        header("Location: login.php?error=1");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>