<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tentang Kami - RumahKerja</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#faf7f2;
    color:#3f2d20;
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

.navbar a.active{
    background:#e6cbb1;
    padding:10px 24px;
    border-radius:30px;
}

/* HERO */
.hero{
    padding:130px 60px 60px;
    text-align:center;
}

.hero h1{
    font-size:42px;
    color:#3f2d20;
    margin-bottom:12px;
}

.hero p{
    color:#6d5c4d;
    font-size:16px;
    line-height:1.7;
}

/* SECTIONS */
.section{
    padding:60px;
}

.section h2{
    font-size:32px;
    margin-bottom:24px;
    color:#3f2d20;
    text-align:center;
}

.section p{
    font-size:16px;
    color:#5b4636;
    line-height:1.8;
    max-width:800px;
    margin:0 auto 20px auto;
    text-align:center;
}

/* TEAM */
.team{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
    margin-top:40px;
}

.member{
    background:#fff;
    border-radius:20px;
    padding:20px;
    text-align:center;
    box-shadow:0 12px 28px rgba(0,0,0,0.06);
}

.member img{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:15px;
}

.member h3{
    font-size:18px;
    margin-bottom:5px;
}

.member p{
    font-size:14px;
    color:#8B5E3C;
}

/* FOOTER */
.footer{
    background:#111827;
    color:#fff;
    text-align:center;
    padding:24px;
    margin-top:40px;
}

/* RESPONSIVE */
@media(max-width:900px){
    .navbar{
        padding:18px 20px;
    }
    .hero{
        padding:120px 20px 40px;
    }
    .section{
        padding:40px 20px;
    }
    .team{
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
        <a href="<?= base_url('tentang-kami') ?>" class="active">Tentang Kami</a>
        <a href="<?= base_url('logout') ?>">Logout</a>
    </div>
</div>

<!-- HERO -->
<section class="hero">
    <h1>Tentang Kami</h1>
    <p>RumahKerja menghubungkan pemilik rumah dengan pekerja rumah terpercaya. Misi kami adalah memberikan kemudahan dalam menemukan ART, tukang, sopir, dan babysitter profesional dengan aman dan nyaman.</p>
</section>

<!-- MISSION SECTION -->
<section class="section">
    <h2>Misi Kami</h2>
    <p>Menyediakan platform terpercaya untuk layanan pekerja rumah yang profesional, aman, dan berkualitas tinggi.</p>
    <p>Mendukung pemilik rumah untuk menghemat waktu dan meningkatkan kenyamanan rumah tangga mereka.</p>
    <p>Membangun komunitas pekerja rumah yang kompeten, terlatih, dan dapat dipercaya.</p>
</section>

<!-- TEAM SECTION -->
<section class="section">
    <h2>Tim Kami</h2>
    <div class="team">
        <div class="member">
            <img src="<?= base_url('assets/images/CEO (3).jpg') ?>" alt="CEO">
            <h3>Nara S.</h3>
            <p>CEO & Founder</p>
        </div>
        <div class="member">
            <img src="<?= base_url('assets/images/team 2.jpg') ?>" alt="CTO">
            <h3>Agus T.</h3>
            <p>CTO</p>
        </div>
        <div class="member">
            <img src="<?= base_url('assets/images/3.jpg') ?>" alt="Manager">
            <h3>Dewi P.</h3>
            <p>Manajer Operasional</p>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    © 2026 RumahKerja - Sistem Informasi Jasa Pekerja Rumah
</footer>

</body>
</html>