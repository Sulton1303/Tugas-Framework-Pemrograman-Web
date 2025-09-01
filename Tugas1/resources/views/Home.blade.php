<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Framework Web - Home</title>
    <style>
        img {
            display: block;
            margin: 20px auto;
            max-width: 100%;
            height: auto;
        }
        
        .navigation {
            text-align: center;
            margin: 20px 0;
        }
        
        .navigation a {
            display: inline-block;
            margin: 0 10px;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            font-weight: bold;
        }
        
        .navigation a:hover {
            background-color: #0056b3;
        }
        
        .navigation a.active {
            background-color: #28a745;
        }
    </style>
</head>
<body>  
    <h2>Framework Web</h2>
    <p>
        Framework web adalah <strong>kerangka kerja</strong> yang membantu developer membangun website atau aplikasi web dengan lebih cepat, terstruktur, dan mudah dipelihara. Ibaratnya seperti pondasi dan peralatan siap pakai, sehingga tidak perlu membuat semuanya dari nol.
    </p>
    
    <h3>Manfaat Framework Web</h3>
    <ul>
        <li><strong>Mempercepat pengembangan</strong> — sudah ada fitur dasar seperti routing, autentikasi, dan koneksi database.</li>
        <li><strong>Kode lebih terstruktur</strong> — mudah dibaca, dipahami, dan dipelihara.</li>
        <li><strong>Keamanan lebih baik</strong> — banyak framework melindungi dari SQL Injection, XSS, CSRF, dll.</li>
        <li><strong>Mendukung kerja tim</strong> — standar penulisan kode jelas sehingga memudahkan kolaborasi.</li>
    </ul>
    
    <h3>Contoh Framework Web Populer</h3>
    <ul>
        <li>Laravel (PHP)</li>
        <li>Django (Python)</li>
        <li>Express.js (Node.js)</li>
        <li>Spring Boot (Java)</li>
        <li>React.js (JavaScript - Frontend)</li>
    </ul>

    <img src="images/FPW.png" alt="Gambar Framework Pemrograman Web">

    <div class="navigation">
        <a href="/home" class="active">Home</a>
        <a href="/laravel" onclick="showAlert('Laravel')">Laravel</a>
    </div>

    <script>
        // JavaScript untuk menampilkan alert ketika pindah halaman
        function showAlert(pageName) {
            alert('Anda akan pindah ke halaman ' + pageName + '!');
        }
        
        // Alert ketika halaman Home dimuat
        window.onload = function() {
            console.log('Halaman Home berhasil dimuat');
        }
    </script>
</body>
</html>