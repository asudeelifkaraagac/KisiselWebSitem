<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Giriş Yap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card shadow p-4" style="width: 400px;">
        
         <a href="index.html" class="btn btn-outline-secondary btn-sm mb-3">← Ana Sayfa</a>

        <h2 class="text-center mb-4">Öğrenci Girişi</h2>

        <?php if(isset($_GET['error']) && $_GET['error'] == '1'): ?>
            <div class="alert alert-danger">Kullanıcı adı veya şifre hatalı!</div>
        <?php endif; ?>

        <form action="login_islem.php" method="POST" onsubmit="return validateLogin()">
            <div class="mb-3">
                <label>Öğrenci Mail Adresi</label>
                <input type="email" name="email" id="email" class="form-control" required placeholder="b2412100001@sakarya.edu.tr">
            </div>
            <div class="mb-3">
                <label>Şifre (Öğrenci No)</label>
                <input type="password" name="password" id="password" class="form-control" required placeholder="b2412100001">
            </div>
            <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
        </form>
    </div>
</div>

<script>

    function validateLogin() {
        let email = document.getElementById('email').value.trim(); // .trim() görünmez boşlukları siler
        let password = document.getElementById('password').value.trim();
        
        // Regex: b + en az 8, en fazla 12 rakam + @sakarya.edu.tr
        // 10 rakam kesin değilse \d+ (bir veya daha fazla rakam) kullanmak daha sağlıklıdır.
        const emailRegex = /^b\d{8,12}@sakarya\.edu\.tr$/; 
        
        if (email === "" || password === "") {
            alert("Lütfen tüm alanları doldurun!");
            return false;
        }
        if (!emailRegex.test(email)) {
            alert("Geçersiz e-posta formatı! Lütfen mail adresinizi kontrol edin.");
            return false;
        }
        return true;
}
</script>
</body>
</html>