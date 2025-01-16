<?php
$product = isset($_GET['product']) ? $_GET['product'] : 'Motor Tua';
$price = isset($_GET['price']) ? $_GET['price'] : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - Classic.Garage28</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://i.pinimg.com/originals/d0/9b/3d/d09b3d06b7fd12d30771a7c732122df7.jpg'); /* Gambar motor klasik */
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 20px;
        }

        .card {
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            border: none;
            border-radius: 10px;
        }

        .footer {
            text-align: center;
            color: #ccc;
            margin-top: 30px;
        }

        .btn-custom {
            background-color: #d4af37; /* Emas retro */
            color: white;
            font-size: 1.1rem;
            border-radius: 5px;
        }

        .payment-info {
            background-color: rgba(34, 34, 34, 0.8);
            border-radius: 10px;
            padding: 10px;
            margin-top: 10px;
        }

        .navbar {
            background-color: #6a4e23; /* Coklat retro */
        }

        .custom-div {
            background-color: #6a4e23; /* Coklat retro */
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            color: #fff;
            text-align: center;
            font-size: 1.2rem;
        }

        .custom-div a {
            color: #fff;
            margin-right: 15px;
            text-decoration: none;
        }

        .custom-div a:hover {
            text-decoration: underline;
        }

        h2, h3, h5 {
            font-family: 'Courier New', Courier, monospace;
        }

        .form-label {
            color: #d4af37; /* Emas */
        }

        input[type="text"],
        input[type="email"],
        select {
            background-color: #333;
            border: 1px solid #d4af37;
            color: #fff;
            font-size: 1rem;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        select:focus {
            outline: none;
            border-color: #6a4e23; /* Coklat retro */
        }

        .form-control {
            border-radius: 5px;
        }

        .card-header {
            background-color: #6a4e23; /* Coklat retro */
        }

        .card-body {
            background-color: rgba(0, 0, 0, 0.6);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Classic.Garage28</a>
    </div>
</nav>

<div class="container py-4">
    <div class="custom-div">
        <a href="home.php">Home</a>
        <a href="produk.php">Produk</a>
        <a href="tentang_kami.php">Tentang Kami</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Konfirmasi Pembelian Motor Tua</h2>
        </div>
        <div class="card-body">
            <h3 class="card-title"><?php echo htmlspecialchars($product); ?></h3>
            <p>Harga: Rp <?php echo number_format($price, 0, ',', '.'); ?></p>
            <hr>
            <h5>Isi Data Pembayaran:</h5>
            <form action="checkout.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat Pengiriman</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="mb-3">
                    <label for="payment-method" class="form-label">Pilih Metode Pembayaran</label>
                    <select class="form-control" id="payment-method" name="payment-method" required>
                        <option value="bank_transfer">Transfer Bank</option>
                        <option value="gopay">GoPay</option>
                        <option value="shopeepay">ShopeePay</option>
                        <option value="dana">DANA</option>
                        <option value="ovo">OVO</option>
                        <option value="linkaja">LinkAja</option>
                    </select>
                </div>
                
                <div id="payment-info" class="payment-info">
                    <h6>Informasi Pembayaran:</h6>
                    <p id="payment-details">Pilih metode pembayaran di atas untuk melihat petunjuk pembayaran.</p>
                </div>

                <button type="submit" class="btn btn-custom mt-3">Bayar Sekarang</button>
            </form>
        </div>
    </div>
</div>

<div class="footer">
    &copy; 2024 Classic.Garage28. All rights reserved.
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"></script>
<script>
    document.getElementById("payment-method").addEventListener("change", function () {
        const paymentMethod = this.value;
        let paymentDetails = "";

        if (paymentMethod === "bank_transfer") {
            paymentDetails = "<strong>Bank Transfer:</strong> Silakan transfer ke rekening Bank XYZ dengan nomor rekening 123-456-789 a/n Classic.Garage28. Setelah transfer, kirimkan bukti pembayaran ke email kami.";
        } else if (paymentMethod === "gopay") {
            paymentDetails = "<strong>GoPay:</strong> Silakan lakukan pembayaran melalui aplikasi GoPay menggunakan kode QR yang akan kami kirimkan setelah Anda klik 'Bayar Sekarang'.";
        } else if (paymentMethod === "shopeepay") {
            paymentDetails = "<strong>ShopeePay:</strong> Silakan lakukan pembayaran melalui aplikasi ShopeePay, menggunakan nomor rekening ShopeePay yang akan kami kirimkan.";
        } else if (paymentMethod === "dana") {
            paymentDetails = "<strong>DANA:</strong> Silakan lakukan pembayaran ke nomor DANA kami. Kami akan mengirimkan nomor DANA setelah Anda memilih opsi ini.";
        } else if (paymentMethod === "ovo") {
            paymentDetails = "<strong>OVO:</strong> Silakan transfer menggunakan akun OVO Anda ke nomor OVO yang akan kami kirimkan.";
        } else if (paymentMethod === "linkaja") {
            paymentDetails = "<strong>LinkAja:</strong> Anda dapat melakukan transfer ke nomor LinkAja yang akan kami kirimkan.";
        }

        document.getElementById("payment-details").innerHTML = paymentDetails;
    });
</script>

</body>
</html>
