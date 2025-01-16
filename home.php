<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jual Beli Motor Tua & Suku Cadang | Classic.Garage28</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #efebe9; /* Background coklat muda klasik */
            color: #3e2723; /* Warna teks coklat gelap */
            font-family: 'Georgia', serif; /* Font serif klasik */
            min-height: 100vh;
        }

        .navbar {
            background-color: #4e342e; /* Warna navbar coklat gelap */
        }

        .navbar .navbar-brand {
            color: #ffb300; /* Warna emas retro untuk navbar */
            font-weight: bold;
            font-family: 'Times New Roman', serif;
        }

        .navbar .navbar-brand:hover {
            color: #ffffff;
        }

        .custom-div {
            background-color: #fff5e1; /* Latar belakang kuning lembut */
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15); /* Bayangan lebih halus */
            text-align: center;
            border: 1px solid #d7ccc8;
        }

        .custom-div a {
            color: #3e2723; /* Warna coklat untuk link */
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
            font-family: 'Georgia', serif;
        }

        .custom-div a:hover {
            text-decoration: underline;
        }

        .card {
            background-color: #fff;
            border: 1px solid #d7ccc8;
            color: #3e2723;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px); /* Hover efek kartu */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #6d4c41; /* Coklat retro header kartu */
            color: #fff;
            font-weight: bold;
            font-family: 'Georgia', serif;
        }

        .highlight {
            background-color: #d7ccc8; /* Highlight coklat muda */
            padding: 20px;
            border-radius: 10px;
            color: #3e2723;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 30px;
            border: 1px solid #b5a38d;
        }

        .container {
            padding: 40px 20px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .photo-gallery img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .row.photo-gallery {
            margin-bottom: 30px;
        }

        .video-container {
            text-align: center;
            margin-top: 40px;
        }

        .video-container iframe {
            width: 100%;
            height: 400px;
            border-radius: 10px;
        }

        /* Responsiveness untuk tampilan mobile */
        @media (max-width: 768px) {
            .custom-div a {
                display: block;
                margin-bottom: 10px;
            }

            .card {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Classic.Garage28 - Dashboard Jual Beli Motor Tua & Suku Cadang</a>
        </div>
    </nav>

    <div class="container py-4">
        <div class="custom-div">
            <a href="home.php">Home</a>
            <a href="produk.php">Produk</a>
            <a href="pembayaran.php">Pembayaran</a>
            <a href="tentang_kami.php">Tentang Kami</a>
            <a href="admin/login.php">Login Admin</a>
            <a href="dashboard.php">Dashboard</a>
        </div>

        <!-- Keunggulan Motor Tua -->
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">Keunggulan Motor Tua Kami</div>
                    <div class="card-body">
                        <ul>
                            <li>Motor klasik dengan kondisi terawat dan original.</li>
                            <li>Desain vintage yang mengesankan dan unik.</li>
                            <li>Mesin tangguh, ideal untuk kolektor dan penggemar motor tua.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Suku Cadang Motor Tua -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">Suku Cadang Motor Tua</div>
                    <div class="card-body">
                        <p>Kami menyediakan suku cadang langka dan berkualitas tinggi untuk motor tua Anda.</p>
                        <ul>
                            <li>Karburator, sokbreker, dan spare parts motor klasik lainnya.</li>
                            <li>Part mesin dan kelistrikan motor tua yang sulit ditemukan.</li>
                            <li>Suku cadang khusus untuk berbagai model motor vintage.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Promo Spesial -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">Promo Spesial</div>
                    <div class="card-body">
                        <p>Diskon hingga 20% untuk pembelian motor tua dan suku cadang tertentu.</p>
                        <p>Gratis ongkos kirim untuk pembelian motor tua dan suku cadang di atas Rp 1.000.000.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Galeri Foto -->
        <div class="row photo-gallery">
            <div class="col-md-4 mb-3">
                <img src="https://i.pinimg.com/736x/1a/c8/72/1ac87290ccf00a12a5d9798566198f41.jpg" alt="Motor Tua">
            </div>
            <div class="col-md-4 mb-3">
                <img src="https://i.pinimg.com/736x/44/50/a8/4450a8d483a4bbd8e3e3eafc940bf03d.jpg" alt="Motor Klasik">
            </div>
            <div class="col-md-4 mb-3">
                <img src="https://thumb.viva.co.id/media/frontend/thumbs3/2018/03/28/5abb3a989c7ae-onderdil-dan-aksesori-motor-tua-di-kmj_1265_711.jpg" alt="Suku Cadang Motor Tua">
            </div>
        </div>

        <!-- Video Promo -->
        <div class="video-container">
            <h3>Video Promo Motor Tua</h3>
            <iframe src="https://www.youtube.com/embed/1phi9JrtGmo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <!-- Highlight -->
        <div class="highlight mt-4">
            "Rasakan Kenangan Klasik dengan Motor Tua Berkualitas dan Suku Cadang Terjamin!"
        </div>
    </div>

    <script src="<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
"></script>
</body>
</html>
