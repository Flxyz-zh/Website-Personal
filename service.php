<?php
session_start();
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Haidar - Eksklusif</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-dark: #1a1a2e;
            --accent-color: #75b621;
            --text-light: #ffffff;
            --bg-card: #ffffff;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9; /* Warna latar belakang yang bersih */
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Navigation Bar */
        nav {
            background-color: var(--primary-dark);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        nav h1 {
            color: var(--accent-color);
            font-size: 1.5rem;
            margin: 0;
        }

        nav ul {
            display: flex;
            gap: 2rem;
            list-style: none;
            margin: 0;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--text-light);
            font-weight: 400;
            transition: 0.3s;
        }

        nav ul li a:hover {
            color: var(--accent-color);
        }

        /* Hero Section / Biografi */
        .hero {
            background-color: var(--primary-dark);
            color: white;
            padding: 4rem 5%;
            text-align: center;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .social-buttons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .btn-social {
            padding: 8px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
            text-decoration: none;
            font-size: 0.8rem;
            color: white;
        }

        .btn-insta { background: #E1306C; }
        .btn-spotify { background: #1DB954; }
        .btn-otaku { background: #f39c12; }

        .btn-social:hover { transform: translateY(-3px); opacity: 0.9; }

        /* Product Section */
        .container {
            padding: 3rem 5%;
        }

        .section-title {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2rem;
            color: var(--primary-dark);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .product-card {
            background: var(--bg-card);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: 0.3s;
            text-align: center;
            padding-bottom: 20px;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-card h3 {
            margin: 15px 0 5px;
            font-size: 1.2rem;
        }

        .product-card p {
            color: var(--accent-color);
            font-weight: 600;
            margin-bottom: 15px;
        }

        .btn-buy {
            text-decoration: none;
            background-color: var(--primary-dark);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .btn-buy:hover {
            background-color: var(--accent-color);
        }

        .cart-link {
            display: block;
            text-align: center;
            margin-top: 40px;
            color: var(--primary-dark);
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <nav>
        <h1>JAKPOT SHOP</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcvPSRi8wZHHRB3qTu1Lr20ZTljZP18L-zJQ&s">About</a></li>
            <li><a href="service.php">Service</a></li>
            <li><a href="lihat_keranjang.php">Keranjang (<?php echo isset($_SESSION['keranjang']) ? count($_SESSION['keranjang']) : 0; ?>)</a></li>
        </ul>
    </nav>

    <header class="hero">
        <h2>📍Hubungi kami</h2>
    
         <div class="service">
            <p>📍<strong>ALAMAT :</strong>SMKN 22 </p>
            <p>☎️<strong>NOMOR HP :</strong>0815-7477-8243</p>
            <p>🆔<strong>INSTAGRAM :</strong>@Dadarssz</p>
        </div>   
        <!-- <div class="social-buttons">
            <a href="https://www.instagram.com/dadarssz" class="btn-social btn-insta">Instagram</a>
            <a href="https://open.spotify.com/playlist/3msTXXFigePecozJmaiyzb?si=2N-npAKXQ2mXB86FkAesdg" class="btn-social btn-spotify">Spotify</a>
            <a href="https://otakudesu.best/" class="btn-social btn-otaku">Otakudesu</a>
        </div> -->
    </header>