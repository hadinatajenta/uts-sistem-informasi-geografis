<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GIS</title>

    <!-- Load Leaflet from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" crossorigin=""></script>

    <!-- Load Esri Leaflet from CDN -->
    <script src="https://unpkg.com/esri-leaflet@3.0.10/dist/esri-leaflet.js"></script>
    <script src="https://unpkg.com/esri-leaflet-vector@4.0.1/dist/esri-leaflet-vector.js"></script>
    
    <!-- Load Esri Leaflet Geocoder from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@^3.1.3/dist/esri-leaflet-geocoder.css">
    <script src="https://unpkg.com/esri-leaflet-geocoder@^3.1.3/dist/esri-leaflet-geocoder.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <header>
        <p class="judul">UTS SIG</p>

        <nav>
            <a href="/">Home</a>
            <a href="/login">Login</a>
        </nav>
    </header>

    <div class="map-container">
        <!--MAP-->
        <div id="map"></div>

        <!--PENJELASAN-->
        <div class="penjelasan">
            <div class="box">
                <h2>Sistem Informasi Geografis</h2>
                <p>Sistem informasi geografis perguruan tinggi (SIG PT) adalah sebuah aplikasi perangkat lunak yang memanfaatkan teknologi geospasial dan informasi geografis untuk mengelola data geografis dan spasial yang terkait dengan perguruan tinggi.</p>
                <p>Tujuannya adalah untuk membantu pengambilan keputusan dan perencanaan dengan cara yang lebih efektif dan efisien, serta untuk meningkatkan koordinasi dan integrasi antara unit-unit dan departemen-departemen dalam perguruan tinggi.</p>
            </div>
            <div class="box">
                <h2>Manfaat Penggunaan SIG</h2>
                <p> Dengan menggunakan SIG PT, pihak pengelola kampus dapat memperoleh informasi yang lebih lengkap dan detail tentang kondisi geospasial kampus, sehingga dapat mengambil keputusan perencanaan yang lebih tepat dan efektif. Misalnya, dapat memperkirakan kebutuhan lahan untuk pembangunan infrastruktur baru, memilih lokasi yang tepat untuk pembangunan gedung baru atau tempat parkir, dan menentukan jalur evakuasi dalam situasi darurat.</p>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <p>&copy; 2023 - Hadinata Jenta</p>
            <ul>
                <li><a href="#">Tentang</a></li>
                <li><a href="#">Kontak</a></li>
                <li><a href="#">Pusat Bantuan</a></li>
            </ul>
        </div>
    </footer>
      
</body>

<script src="/js/script.js"></script>
</html>