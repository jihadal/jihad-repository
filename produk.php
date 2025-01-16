<?php
include 'connect.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Motor Tua & Suku Cadang - Classic.Garage28</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #3c2a1d; /* Dark brown background */
            color: #fff;
            font-family: 'Courier New', Courier, monospace;
            padding: 20px;
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

        .product-card {
            background-color: #4b3c2f; /* Dark brown background for product cards */
            border: none;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .product-card img {
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .product-card .card-body {
            text-align: center;
            padding: 15px;
        }

        .product-card h5 {
            margin-top: 15px;
            font-size: 1.5rem;
            color: #d4af37; /* Gold color for text */
        }

        .product-card p {
            color: #fff;
        }

        .product-card .price {
            color: #fff;
            font-size: 1.25rem;
            font-weight: bold;
            margin-top: 10px;
        }

        .product-card .btn-danger {
            background-color: #d4af37; /* Gold for button */
            border: none;
            font-weight: bold;
            border-radius: 5px;
        }

        .product-card .btn-danger:hover {
            background-color: #c70039; /* Dark red for hover */
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #ccc;
            font-size: 0.9rem;
        }

        .custom-div {
            background-color: #6a4e23; /* Coklat retro */
            padding: 20px;
            margin-top: 20px;
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

        .card-body p {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
<div class="container py-4">
    <div class="custom-div">
        <a href="home.php">Home</a>
        <a href="produk.php">Produk</a>
        <a href="pembayaran.php">Pembayaran</a>
        <a href="tentang_kami.php">Tentang Kami</a>
    </div>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Classic.Garage28</a>
        </div>
    </nav>

    <div class="container">
        <div class="row">

        </div>
    </div>
    <div class="container">
        <h1>Daftar Produk</h1>
        <div class="products">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="product">
                    <!-- Menampilkan gambar produk -->
                    <img src="uploads/<?php echo $row['image']; ?>" alt="Gambar Produk">
                    <h3><?php echo $row['name']; ?></h3>
                    <p>Harga: Rp <?php echo number_format($row['price'], 2, ',', '.'); ?></p>
                    <p><?php echo $row['description']; ?></p>
                    <button onclick="location.href='pembayaran.php'">Shop Now</button>
                </div>
            <?php } ?>
        </div>
    </div>
    <th>Nama Produk</th>
    <th>Harga</th>
    <th>Deskripsi</th>
    <th>Gambar</th>
    <th>Aksi</th>
</tr>
<?php while ($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><img src="<?php echo $row['image']; ?>" alt="Image" width="100"></td>
    <td>
        <a href="edit_product.php?id=<?php echo $row['id']; ?>">Edit</a> |
        <a href="delete_product.php?id=<?php echo $row['id']; ?>">Hapus</a>
    </td>
</tr>
<?php } ?>

</body>
</html>
