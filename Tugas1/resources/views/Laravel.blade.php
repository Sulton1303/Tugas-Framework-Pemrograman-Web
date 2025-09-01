<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Apa Itu Laravel?</title>
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
    <h2>Apa Itu Laravel?</h2>
    <p>
        Laravel adalah <strong>framework aplikasi web berbasis PHP</strong> yang dirancang untuk mempermudah developer membangun aplikasi modern.
    </p>
    
    <h3>Fitur Utama Laravel</h3>
    <ul>
        <li><strong>MVC (Model–View–Controller)</strong> → membuat kode lebih rapi dan terstruktur.</li>
        <li><strong>Sintaks elegan & ekspresif</strong> → mudah dibaca dan dipelihara.</li>
        <li><strong>Routing sederhana</strong> → memetakan URL ke fungsi/aksi dengan mudah.</li>
        <li><strong>ORM Eloquent</strong> → interaksi dengan database tanpa query SQL mentah.</li>
        <li><strong>Fitur bawaan lengkap</strong> → autentikasi, session, middleware, Blade template, API, queue, dan testing.</li>
        <li><strong>Ekosistem luas</strong> → banyak package tersedia untuk berbagai kebutuhan.</li>
        <li><strong>Komunitas besar</strong> → dokumentasi dan dukungan komunitas melimpah.</li>
    </ul>
    
    <p>
        Singkatnya, <em>Laravel</em> adalah alat bantu yang mempercepat dan mempermudah pembuatan aplikasi web dengan PHP, sehingga hasilnya lebih rapi, aman, dan modern.
    </p>

    <img src="images/Laravel.png" alt="Gambar Laravel">

    <div class="navigation">
        <a href="/home" onclick="showAlert('Home')">Home</a>
        <a href="/laravel" class="active">Laravel</a>
    </div>

    <script>
        // JavaScript untuk menampilkan alert ketika pindah halaman
        function showAlert(pageName) {
            alert('Anda akan pindah ke halaman ' + pageName + '!');
        }
        
        // Alert ketika halaman Laravel dimuat
        window.onload = function() {
            console.log('Halaman Laravel berhasil dimuat');
        }
    </script>
</body>
</html>