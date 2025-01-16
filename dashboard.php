<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jual Beli Motor Tua & Suku Cadang - Classic.Garage28</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Courier New', Courier, monospace;
            background-image: url('https://imgx.gridoto.com/crop/101x110:1031x688/700x465/photo/2020/12/17/669882412.jpg');
            background-size: cover;
            background-position: top;
            height: 100vh;
            color: #fff;
        }

        .navbar {
            background-color: #6a4e23; /* Coklat retro */
        }

        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
            font-size: 1.75rem;
        }

        .custom-div {
            background-color: #6a4e23; /* Coklat retro */
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            text-align: center;
        }

        .custom-div a {
            color: #fff;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .custom-div a:hover {
            text-decoration: underline;
        }

        .card {
            background-color: #2c3e50; /* Darker background for card */
            color: #eee;
            border: none;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #d4af37; /* Emas Retro */
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .card-body {
            color: #eee;
            font-size: 1.1rem;
        }

        .highlight {
            background-color: #d4af37; /* Emas Retro */
            color: #fff;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            font-size: 1.5rem;
            margin-top: 20px;
        }

        .footer {
            text-align: center;
            color: #ccc;
            margin-top: 30px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Classic.Garage28 - Dashboard Jual Beli Motor Tua & Suku Cadang</a>
        </div>
    </nav>

    <div class="container py-4">
        <!-- Navigation Links -->
        <div class="custom-div">
            <a href="home.php">Home</a>
            <a href="produk.php">produk</a>
            <a href="pembayaran.php">Pembayaran</a>
            <a href="tentang_kami.php">Tentang Kami</a>
            <a href="admin/login.php">Login Admin</a>
        </div>

        <!-- Content Cards -->
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Keunggulan Motor Tua Kami</div>
                    <div class="card-body">
                        <ul>
                            <li>Motor klasik dengan kondisi terawat dan orisinil.</li>
                            <li>Spesifikasi mesin yang kuat dan tangguh.</li>
                            <li>Desain vintage yang memikat penggemar motor tua.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Suku Cadang Motor Tua</div>
                    <div class="card-body">
                        <p>Kami menyediakan suku cadang motor tua yang langka dan berkualitas tinggi.</p>
                        <ul>
                            <li>Karburator original motor klasik.</li>
                            <li>Parts mesin, transmisi, dan kelistrikan.</li>
                            <li>Suku cadang roda dan suspensi yang sesuai dengan model motor.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Promo Spesial</div>
                    <div class="card-body">
                        <p>Diskon 15% untuk pembelian motor tua dan suku cadang dalam paket.</p>
                        <p>Gratis pengiriman untuk motor tua dan suku cadang dalam wilayah tertentu.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Highlight Section -->
        <div class="highlight">
            "Rasakan Kenangan Klasik dengan Motor Tua Berkualitas dan Suku Cadang Terjamin!"
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 Classic.Garage28. All rights reserved.
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
