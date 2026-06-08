<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pesanan Anda - RumahKerja</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
* {
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body {
    background:#fef7ef;
    color:#3f2d20;
}

/* NAVBAR */
.navbar {
    width:100%;
    background:#fff;
    padding:20px 60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    border-bottom:1px solid #eee;
    position:fixed;
    top:0;
    left:0;
    z-index:1000;
}

.logo {
    font-size:22px;
    font-weight:700;
    color:#8B5E3C;
}

.navbar a {
    text-decoration:none;
    margin:0 12px;
    color:#5b4636;
    font-weight:500;
}

.logout-btn {
    background:#000;
    color:#fff;
    padding:8px 20px;
    border-radius:25px;
    font-weight:600;
    text-decoration:none;
    transition:0.3s;
}

.logout-btn:hover {
    background:#333;
}

/* CONTAINER */
.container {
    padding:120px 60px 60px;
    max-width:1100px;
    margin:0 auto;
}

/* HEADER */
.header-page h2 {
    font-size:32px;
    margin-bottom:8px;
}

.header-page p {
    color:#6d5c4d;
    font-size:14px;
}

/* ORDER CARD */
.order-card {
    background:#fff;
    border-radius:15px;
    box-shadow:0 10px 20px rgba(0,0,0,0.05);
    padding:20px;
    margin-bottom:20px;
}

.order-card h3 {
    font-size:18px;
    margin-bottom:6px;
}

.order-card p {
    font-size:14px;
    color:#6d5c4d;
    margin-bottom:10px;
}

.order-card .btn {
    display:inline-block;
    padding:10px 18px;
    border-radius:25px;
    background:#A67C52;
    color:#fff;
    text-decoration:none;
    font-size:14px;
    transition:0.3s;
}

.order-card .btn:hover {
    background:#8B5E3C;
}

/* EMPTY STATE */
.empty-state {
    background:#fff;
    padding:40px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 10px 20px rgba(0,0,0,0.05);
    margin-top:30px;
}

.empty-state h3 {
    font-size:22px;
    margin-bottom:10px;
}

.empty-state p {
    color:#6d5c4d;
    font-size:14px;
    margin-bottom:20px;
}

.empty-state .btn {
    padding:12px 28px;
}

/* RESPONSIVE */
@media(max-width:768px) {
    .container {
        padding:140px 20px 20px;
    }
    .navbar {
        padding:15px 20px;
    }
    .header-page h2 {
        font-size:26px;
    }
    .order-card h3 {
        font-size:16px;
    }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">RumahKerja</div>
    <div>
        <a href="<?= base_url('beranda') ?>">Beranda</a>
        <a href="<?= base_url('tentang-kami') ?>">Tentang Kami</a>
    </div>
</div>

<!-- CONTAINER -->
<div class="container">
    <div class="header-page">
        <h2>Pesanan Anda</h2>
        <p>Semua pesanan yang Anda buat akan muncul di bawah.</p>
    </div>

    <!-- jika pesanan kosong -->
    <div class="empty-state">
        <h3>Belum ada pesanan.</h3>
        <p>Buka halaman Cari Pekerja Rumah dan buat pesanan Anda sekarang.</p>
        <a href="<?= base_url('cari') ?>" class="btn">Ke Halaman Cari Pekerja Rumah</a>
    </div>

    <!-- contoh order card (hilangkan atau loop data sesungguhnya dari DB) -->
    <!--
    <div class="order-card">
        <h3>Nama Pekerja: Budi</h3>
        <p>Kategori: Tukang Bangunan</p>
        <p>Lokasi: Palu</p>
        <p>Tanggal: 2026-06-06</p>
        <a href="#" class="btn">Lihat Detail</a>
    </div>
    -->
</div>

</body>
</html>