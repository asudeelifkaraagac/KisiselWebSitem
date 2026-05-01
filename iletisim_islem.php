<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Gelen Veriler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4>Sunucuya Ulaşan Form Verileri</h4>
        </div>
        <div class="card-body">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Verileri güvenli hale getirerek alıyoruz (XSS koruması)
                $adSoyad = htmlspecialchars($_POST['adSoyad']);
                $email   = htmlspecialchars($_POST['email']);
                $telefon = htmlspecialchars($_POST['telefon']);
                $konu    = htmlspecialchars($_POST['konu']);
                $cinsiyet= isset($_POST['cinsiyet']) ? htmlspecialchars($_POST['cinsiyet']) : "Belirtilmedi";
                $mesaj   = htmlspecialchars($_POST['mesaj']);
                $kvkk    = isset($_POST['kvkk']) ? "Onaylandı" : "Onaylanmadı";

                // Tablo ile düzenli yazdırma
                echo "<table class='table table-bordered table-striped'>";
                echo "<tr><th>Alan</th><th>Değer</th></tr>";
                echo "<tr><td>Ad Soyad</td><td>$adSoyad</td></tr>";
                echo "<tr><td>E-posta</td><td>$email</td></tr>";
                echo "<tr><td>Telefon</td><td>$telefon</td></tr>";
                echo "<tr><td>Konu</td><td>$konu</td></tr>";
                echo "<tr><td>Cinsiyet</td><td>$cinsiyet</td></tr>";
                echo "<tr><td>Mesaj</td><td>$mesaj</td></tr>";
                echo "<tr><td>KVKK Onayı</td><td>$kvkk</td></tr>";
                echo "</table>";
            } else {
                echo "<div class='alert alert-danger'>Veri gönderilmedi! Lütfen iletişim formunu kullanın.</div>";
            }
            ?>
            <a href="iletisim.html" class="btn btn-secondary">Geri Dön</a>
        </div>
    </div>
</div>

</body>
</html>