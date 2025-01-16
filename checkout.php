<?php

$product = isset($_POST['product']) ? $_POST['product'] : 'Motor Tua / Suku Cadang';
$price = isset($_POST['price']) ? $_POST['price'] : 0;
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$payment_method = $_POST['payment-method'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout: Pembayaran Motor Tua dan Suku Cadang - Classic.Garage28</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #2c3e50; /* Dark background */
            color: #fff;
            padding: 20px;
            font-family: 'Courier New', Courier, monospace;
        }

        .navbar {
            background-color: #6a4e23; /* Coklat retro */
            margin-bottom: 20px;
        }

        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .card {
            background-color: #34495e; /* Darker background for cards */
            color: #fff;
            border: none;
            border-radius: 10px;
        }

        .footer {
            text-align: center;
            color: #ccc;
            margin-top: 30px;
            font-size: 0.9rem;
        }

        .btn-custom {
            background-color: #d4af37; /* Gold button */
            color: white;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
        }

        .btn-custom:hover {
            background-color: #c70039; /* Darker red on hover */
        }

        .loading-spinner {
            margin-top: 50px;
            text-align: center;
        }

        .summary {
            background-color: #34495e;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .custom-nav {
            background-color: #6a4e23; /* Coklat retro */
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
        }

        .custom-nav a {
            color: #fff;
            margin-right: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        .custom-nav a:hover {
            text-decoration: underline;
        }

        .summary ul {
            list-style-type: none;
            padding-left: 0;
        }

        .summary ul li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container py-4">
    <!-- Navigation Bar -->
    <div class="custom-nav">
        <a href="home.php">Home</a>
        <a href="produk.php">produk</a>
        <a href="tentang_kami.php">Tentang Kami</a>
        
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Proses Pembayaran Motor Tua dan Suku Cadang - Classic.Garage28</h2>
        </div>
        <div class="card-body">
            <h3 class="card-title">Terima kasih, <?php echo htmlspecialchars($name); ?>!</h3>
            <p><strong>Produk:</strong> <?php echo $product; ?></p>
            <p><strong>Total Pembayaran:</strong> Rp <?php echo number_format($price, 0, ',', '.'); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Alamat Pengiriman:</strong> <?php echo htmlspecialchars($address); ?></p>
            <p><strong>Metode Pembayaran:</strong> <?php echo ucfirst($payment_method); ?></p>
            
            <div class="loading-spinner">
                <h4>Pesanan Anda sedang diproses...</h4>
                <div class="spinner-border text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

            <div class="summary">
                <h5>Ringkasan Pesanan:</h5>
                <ul>
                    <li><strong>Nama:</strong> <?php echo htmlspecialchars($name); ?></li>
                    <li><strong>Produk:</strong> <?php echo $product; ?></li>
                    <li><strong>Total Pembayaran:</strong> Rp <?php echo number_format($price, 0, ',', '.'); ?></li>
                    <li><strong>Metode Pembayaran:</strong> <?php echo ucfirst($payment_method); ?></li>
                </ul>
                <p>Silakan tunggu beberapa saat, kami sedang memverifikasi pembayaran Anda. Anda akan menerima email konfirmasi setelah pembayaran selesai diproses.</p>
            </div>

        </div>
    </div>

    <div class="footer">
        &copy; 2024 Classic.Garage28. All rights reserved.
    </div>
</div>

</body>
</html>
