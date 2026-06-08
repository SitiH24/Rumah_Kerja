<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Beranda User - RumahKerja</title>

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

/* HERO */
.hero{
    padding:140px 60px 60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:60px;
}

.hero-text{
    flex:1;
}

.hero-text h1{
    font-size:55px;
    color:#3f2d20;
    line-height:1.2;
}

.hero-text p{
    margin-top:15px;
    color:#6d5c4d;
    line-height:1.7;
}

.btn{
    display:inline-block;
    margin-top:25px;
    padding:14px 28px;
    background:#A67C52;
    color:white;
    border-radius:30px;
    text-decoration:none;
}

/* HERO IMAGE */
.hero img{
    width:100%;
    max-width:450px;
    border-radius:20px;
}

/* KATEGORI */
.kategori{
    padding:60px;
}

.kategori h2{
    margin-bottom:20px;
    color:#3f2d20;
}

.kategori-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:15px;
}

.kategori-box{
    background:#fff;
    padding:20px;
    border-radius:12px;
    text-align:center;
    box-shadow:0 10px 20px rgba(0,0,0,0.05);
    font-weight:500;
    color:#8B5E3C;
}

/* CARD PEKERJA */
/* PEKERJA POPULER */
.pekerja{
    padding:60px;
    background:#faf7f2;
}

.pekerja h2{
    margin-bottom:28px;
    color:#3f2d20;
    font-size:28px;
}

.card-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:24px;
}

.card{
    background:#fff;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 12px 28px rgba(0,0,0,0.06);
    transition:0.3s ease;
}

.card:hover{
    transform:translateY(-5px);
}

.card img{
    width:100%;
    height:230px;
    object-fit:cover;
}

.card-body{
    padding:20px;
}

.card-body h3{
    color:#3f2d20;
    font-size:22px;
    margin-bottom:6px;
}

.card-body p{
    color:#6d5c4d;
    font-size:15px;
    margin-bottom:6px;
}

.card-meta{
    font-size:13px;
    color:#8B5E3C;
    margin-top:8px;
}

.card-price{
    font-weight:700;
    color:#3f2d20;
    margin-top:10px;
}

.card-body .btn{
    display:inline-block;
    margin-top:14px;
    padding:10px 20px;
    background:#A67C52;
    color:#fff;
    border-radius:24px;
    text-decoration:none;
    font-size:14px;
    font-weight:600;
}

.card-body .btn:hover{
    background:#8B5E3C;
}

@media(max-width:900px){
    .card-grid{
        grid-template-columns:1fr;
    }

    .pekerja{
        padding:30px 20px;
    }
}

/* RESPONSIVE */
@media(max-width:900px){

    .hero{
        flex-direction:column;
        text-align:center;
    }

    .kategori-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .card-grid{
        grid-template-columns:1fr;
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
        <a href="<?= base_url('ulasan') ?>">Ulasan</a>
        <a href="<?= base_url('tentang-kami') ?>">Tentang Kami</a>
        <a href="<?= base_url('logout') ?>">Logout</a>
    </div>
</div>

<!-- HERO -->
<div class="hero">

    <div class="hero-text">
        <h1>Temukan pekerja rumah terpercaya</h1>
        <p>ART, tukang, babysitter, sopir dan lainnya siap membantu kebutuhan Anda.</p>
        <a href="<?= base_url('cari') ?>" class="btn">Cari Sekarang</a>
        <a href="<?= base_url('pesanan') ?>" class="btn">Lihat Pesanan</a>
    </div>

    <div>
        <img src="<?= base_url('assets/images/orang.jpg') ?>" alt="user">
    </div>

</div>


<!-- PEKERJA -->
<!-- PEKERJA -->
<div class="pekerja">

    <h2>Pekerja Populer</h2>

    <div class="card-grid">

        <div class="card">
            <img src="<?= base_url('assets/images/bangunan.jpeg') ?>">
            <div class="card-body">
                <h3>Budi</h3>
                <p>Tukang Bangunan</p>
                <div class="card-meta">📍 Jakarta Selatan • 5+ Tahun</div>
                <div class="card-price">Rp200 rb/hari</div>
                <a href="<?= base_url('cari') ?>" class="btn">Lihat Detail</a>
            </div>
        </div>

        <div class="card">
            <img src="<?= base_url('assets/images/ART.jpeg') ?>">
            <div class="card-body">
                <h3>Lala</h3>
                <p>ART Rumah Tangga</p>
                <div class="card-meta">📍 Palu • 4+ Tahun</div>
                <div class="card-price">Rp150 rb/hari</div>
                <a href="<?= base_url('cari') ?>" class="btn">Lihat Detail</a>
            </div>
        </div>

        <div class="card">
            <img src="<?= base_url('assets/images/sopir.jpeg') ?>">
            <div class="card-body">
                <h3>Andi</h3>
                <p>Sopir Pribadi</p>
                <div class="card-meta">📍 Makassar • 10+ Tahun</div>
                <div class="card-price">Rp180 rb/hari</div>
                <a href="<?= base_url('cari') ?>" class="btn">Lihat Detail</a>
            </div>
        </div>

        <div class="card">
            <img src="<?= base_url('assets/images/babysitter.jpeg') ?>">
            <div class="card-body">
                <h3>Ina</h3>
                <p>Baby Sitter</p>
                <div class="card-meta">📍 Bandung • 3+ Tahun</div>
                <div class="card-price">Rp170 rb/hari</div>
                <a href="<?= base_url('cari') ?>" class="btn">Lihat Detail</a>
            </div>
        </div>

    </div>

</div>

</body>
</html>