<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pesanan - Rumah_Kerja</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

/* RESET */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#faf7f2;
}

/* NAVBAR */
.navbar{
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

.logo{
    font-size:22px;
    font-weight:700;
    color:#8B5E3C;
}

.navbar a{
    text-decoration:none;
    margin:0 12px;
    color:#5b4636;
    font-weight:500;
}

/* CONTAINER */
.container{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:25px;
    padding:120px 60px 60px;
}

/* FORM */
.form-box{
    background:#fff;
    padding:25px;
    border-radius:15px;
    box-shadow:0 10px 20px rgba(0,0,0,0.05);
}

.form-box h2{
    margin-bottom:20px;
    color:#3f2d20;
}

input, select, textarea{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border:1px solid #ddd;
    border-radius:10px;
    outline:none;
}

textarea{
    resize:none;
    height:100px;
}

button{
    width:100%;
    padding:14px;
    border:none;
    background:#A67C52;
    color:#fff;
    border-radius:10px;
    font-weight:600;
    cursor:pointer;
}

/* SUMMARY */
.summary{
    background:#fff;
    padding:20px;
    border-radius:15px;
    box-shadow:0 10px 20px rgba(0,0,0,0.05);
    height:fit-content;
}

.summary h3{
    margin-bottom:15px;
    color:#3f2d20;
}

.summary-item{
    margin-bottom:12px;
    font-size:14px;
    color:#6d5c4d;
}

.price{
    font-size:20px;
    font-weight:700;
    color:#8B5E3C;
    margin-top:10px;
}

/* RESPONSIVE */
@media(max-width:900px){
    .container{
        grid-template-columns:1fr;
    }
}

</style>

</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">🏠 Rumah_Kerja</div>
    <div>
        <a href="<?= base_url('beranda') ?>">Beranda</a>
        <a href="<?= base_url('cari') ?>">Cari</a>
        <a href="<?= base_url('pesanan') ?>">Pesanan</a>
    </div>
</div>

<!-- CONTENT -->
<div class="container">

    <!-- FORM ORDER -->
    <div class="form-box">

        <h2>Form Pemesanan</h2>

        <form action="#" method="post">

            <input type="text" name="nama" placeholder="Nama Pemesan">

            <select name="kategori">
                <option>Pilih Kategori Pekerja</option>
                <option>ART</option>
                <option>Tukang</option>
                <option>Babysitter</option>
                <option>Sopir</option>
            </select>

            <input type="text" name="lokasi" placeholder="Lokasi Pekerjaan">

            <input type="date" name="tanggal">

            <textarea name="catatan" placeholder="Catatan tambahan..."></textarea>

            <button type="submit">Pesan Sekarang</button>

        </form>

    </div>

    <!-- SUMMARY -->
    <div class="summary">

        <h3>Ringkasan Order</h3>

        <div class="summary-item">Kategori: Tukang</div>
        <div class="summary-item">Lokasi: Palu</div>
        <div class="summary-item">Tanggal: 2026-06-06</div>

        <div class="price">Rp 150.000</div>

    </div>

</div>

</body>
</html>