<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Beranda User - Rumah_Kerja</title>

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
.pekerja{
    padding:60px;
}

.pekerja h2{
    margin-bottom:20px;
    color:#3f2d20;
}

.card-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
}

.card{
    background:#fff;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 10px 20px rgba(0,0,0,0.05);
}

.card img{
    width:100%;
    height:200px;
    object-fit:cover;
}

.card-body{
    padding:15px;
}

.card-body h3{
    color:#3f2d20;
}

.card-body p{
    color:#6d5c4d;
    font-size:14px;
    margin-top:5px;
}

.card-body .btn{
    margin-top:10px;
    display:inline-block;
    padding:10px 18px;
    font-size:13px;
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
    <div class="logo">🏠 Rumah_Kerja</div>
    <div>
        <a href="#">Beranda</a>
        <a href="#">Pekerja</a>
        <a href="<?= base_url('login') ?>">Login</a>
    </div>
</div>

<!-- HERO -->
<div class="hero">

    <div class="hero-text">
        <h1>Temukan pekerja rumah terpercaya</h1>
        <p>ART, tukang, babysitter, sopir dan lainnya siap membantu kebutuhan Anda.</p>
        <a href="#" class="btn">Cari Sekarang</a>
    </div>

    <div>
        <img src="<?= base_url('assets/images/orang.jpg') ?>" alt="user">
    </div>

</div>

<!-- KATEGORI -->
<div class="kategori">

    <h2>Kategori Pekerja</h2>

    <div class="kategori-grid">

        <div class="kategori-box">ART</div>
        <div class="kategori-box">Tukang</div>
        <div class="kategori-box">Babysitter</div>
        <div class="kategori-box">Sopir</div>

    </div>

</div>

<!-- PEKERJA -->
<div class="pekerja">

    <h2>Pekerja Populer</h2>

    <div class="card-grid">

        <div class="card">
            <img src="<?= base_url('assets/images/orang.jpg') ?>">
            <div class="card-body">
                <h3>Budi</h3>
                <p>Tukang Bangunan</p>
                <a href="#" class="btn">Lihat</a>
            </div>
        </div>

        <div class="card">
            <img src="<?= base_url('assets/images/orang.jpg') ?>">
            <div class="card-body">
                <h3>Siti</h3>
                <p>ART</p>
                <a href="#" class="btn">Lihat</a>
            </div>
        </div>

        <div class="card">
            <img src="<?= base_url('assets/images/orang.jpg') ?>">
            <div class="card-body">
                <h3>Andi</h3>
                <p>Sopir</p>
                <a href="#" class="btn">Lihat</a>
            </div>
        </div>

    </div>

</div>

</body>
</html>