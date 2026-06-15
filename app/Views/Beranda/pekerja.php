<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Pekerja - RumahKerja</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f7f3ee;
}

/* SIDEBAR */

.sidebar{
    width:260px;
    height:100vh;
    background:#3E2723;
    position:fixed;
    left:0;
    top:0;
    padding:30px 20px;
}

.logo{
    color:white;
    font-size:28px;
    font-weight:800;
    margin-bottom:40px;
    text-align:center;
}

.sidebar ul{
    list-style:none;
}

.sidebar ul li{
    margin-bottom:12px;
}

.sidebar ul li a{
    display:block;
    text-decoration:none;
    color:white;
    padding:14px 18px;
    border-radius:12px;
    transition:.3s;
}

.sidebar ul li a:hover,
.sidebar ul li a.active{
    background:#A67C52;
}

/* MAIN */

.main{
    margin-left:260px;
    padding:35px;
}

/* HEADER */

.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.header h1{
    color:#3E2723;
}

.profile-mini{
    display:flex;
    align-items:center;
    gap:10px;
}

.profile-mini img{
    width:45px;
    height:45px;
    border-radius:50%;
    object-fit:cover;
}

/* CARD STAT */

.stats{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
    margin-bottom:30px;
}

.stat-card{
    background:white;
    padding:25px;
    border-radius:18px;
    box-shadow:0 5px 15px rgba(0,0,0,.05);
}

.stat-card h2{
    color:#A67C52;
    font-size:35px;
}

.stat-card p{
    color:#666;
}

/* CONTENT */

.content{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:25px;
}

/* SECTION */

.section{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 5px 15px rgba(0,0,0,.05);
}

.section-title{
    font-size:22px;
    color:#3E2723;
    margin-bottom:20px;
}

/* ORDER */

.order{
    border:1px solid #eee;
    border-radius:15px;
    padding:15px;
    margin-bottom:15px;
}

.order h4{
    color:#3E2723;
    margin-bottom:5px;
}

.order p{
    color:#777;
    font-size:14px;
    margin-bottom:5px;
}

.btn{
    display:inline-block;
    text-decoration:none;
    padding:8px 15px;
    border-radius:8px;
    color:white;
    font-size:14px;
    margin-top:10px;
}

.btn-terima{
    background:#27ae60;
}

.btn-tolak{
    background:#e74c3c;
}

/* PROFILE */

.profile-box{
    text-align:center;
}

.profile-box img{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:15px;
}

.profile-box h3{
    color:#3E2723;
}

.profile-box p{
    color:#777;
    margin-top:5px;
}

/* REVIEW */

.review{
    background:#fafafa;
    padding:12px;
    border-radius:10px;
    margin-top:12px;
}

.review strong{
    color:#3E2723;
}

.review p{
    color:#666;
    margin-top:5px;
}

/* RESPONSIVE */

@media(max-width:900px){

    .sidebar{
        width:100%;
        height:auto;
        position:relative;
    }

    .main{
        margin-left:0;
    }

    .stats{
        grid-template-columns:1fr;
    }

    .content{
        grid-template-columns:1fr;
    }
}

</style>

</head>
<body>

<!-- SIDEBAR -->

<div class="sidebar">

    <div class="logo">
        RumahKerja
    </div>

    <ul>
        <li><a href="#" class="active">🏠 Beranda</a></li>
        <li><a href="#">👤 Profil Saya</a></li>
        <li><a href="#">📥 Pesanan Masuk</a></li>
        <li><a href="#">📋 Riwayat Pekerjaan</a></li>
        <li><a href="#">⭐ Ulasan</a></li>
        <li><a href="<?= base_url('logout') ?>">🚪 Logout</a></li>
    </ul>

</div>

<!-- MAIN -->

<div class="main">

    <div class="header">

        <h1>Dashboard Pekerja</h1>

        <div class="profile-mini">
            <img src="<?= base_url('assets/images/orang.jpg') ?>">
            <span>Budi Santoso</span>
        </div>

    </div>

    <!-- STATISTIK -->

    <div class="stats">

        <div class="stat-card">
            <h2>3</h2>
            <p>Pesanan Masuk</p>
        </div>

        <div class="stat-card">
            <h2>15</h2>
            <p>Pekerjaan Selesai</p>
        </div>

        <div class="stat-card">
            <h2>4.9 ⭐</h2>
            <p>Rating</p>
        </div>

    </div>

    <div class="content">

        <!-- PESANAN -->

        <div class="section">

            <h2 class="section-title">
                Pesanan Masuk
            </h2>

            <div class="order">
                <h4>Rahmi</h4>
                <p>Jasa : Tukang Bangunan</p>
                <p>Tanggal : 10 Juni 2026</p>

                <a href="#" class="btn btn-terima">
                    Terima
                </a>

                <a href="#" class="btn btn-tolak">
                    Tolak
                </a>
            </div>

            <div class="order">
                <h4>Andi</h4>
                <p>Jasa : Renovasi Rumah</p>
                <p>Tanggal : 12 Juni 2026</p>

                <a href="#" class="btn btn-terima">
                    Terima
                </a>

                <a href="#" class="btn btn-tolak">
                    Tolak
                </a>
            </div>

        </div>

        <!-- SIDEBAR KANAN -->

        <div>

            <div class="section profile-box">

                <img src="<?= base_url('assets/images/orang.jpg') ?>">

                <h3>Budi Santoso</h3>

                <p>Tukang Bangunan</p>

                <p>📍 Kota Palu</p>

            </div>

            <div class="section" style="margin-top:20px;">

                <h2 class="section-title">
                    Ulasan Terbaru
                </h2>

                <div class="review">
                    <strong>Rahmi ⭐⭐⭐⭐⭐</strong>
                    <p>Pekerjaan sangat rapi dan cepat.</p>
                </div>

                <div class="review">
                    <strong>Andi ⭐⭐⭐⭐⭐</strong>
                    <p>Profesional dan tepat waktu.</p>
                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>