<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cari Pekerja - RumahKerja</title>

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

/* SEARCH SECTION */
.search-section{
    padding:130px 60px 30px;
    text-align:center;
}

.search-section h1{
    font-size:40px;
    color:#3f2d20;
    margin-bottom:10px;
}

.search-section p{
    color:#6d5c4d;
    font-size:16px;
}

.search-box{
    display:flex;
    justify-content:center;
    margin-top:20px;
}

.search-box input{
    width:60%;
    padding:15px;
    border:1px solid #ddd;
    border-radius:30px 0 0 30px;
    outline:none;
}

.search-box button{
    padding:15px 25px;
    border:none;
    background:#A67C52;
    color:#fff;
    border-radius:0 30px 30px 0;
    cursor:pointer;
}

/* FILTER */
.filter{
    display:flex;
    justify-content:center;
    gap:10px;
    margin-top:25px;
    flex-wrap:wrap;
}

.filter button{
    padding:10px 18px;
    border:none;
    border-radius:20px;
    background:#fff;
    border:1px solid #c7a17a;
    color:#8B5E3C;
    cursor:pointer;
    font-weight:500;
}

.filter button:hover{
    background:#A67C52;
    color:#fff;
}

/* RESULT DETAIL CARD */
.result{
    padding:40px 60px;
    display:grid;
    grid-template-columns:1fr;
    gap:22px;
}

.card{
    background:#fff;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,0.06);
    display:grid;
    grid-template-columns:170px 1fr 230px;
    align-items:center;
    padding:22px;
    gap:22px;
}

.card img{
    width:150px;
    height:150px;
    object-fit:cover;
    border-radius:16px;
}

.status{
    display:inline-block;
    background:#000;
    color:#fff;
    font-size:11px;
    font-weight:700;
    padding:5px 12px;
    border-radius:20px;
    margin-bottom:10px;
}

.card-body h3{
    color:#3f2d20;
    font-size:26px;
    margin-bottom:8px;
}

.card-body p{
    color:#6d5c4d;
    font-size:15px;
    margin-top:6px;
}

.rating{
    color:#111;
    font-size:14px;
    font-weight:600;
    margin-left:8px;
}

.card-price{
    height:100%;
    border-left:1px solid #eee;
    padding-left:24px;
    display:flex;
    flex-direction:column;
    justify-content:center;
}

.card-price span{
    font-size:12px;
    color:#9a8f87;
    font-weight:700;
    letter-spacing:1px;
}

.card-price h4{
    font-size:26px;
    color:#111827;
    margin:8px 0 18px;
}

.card-price p{
    font-size:13px;
    color:#6d5c4d;
    line-height:1.6;
}

.card-price .btn{
    display:inline-block;
    width:max-content;
    margin-top:14px;
    padding:10px 18px;
    background:#A67C52;
    color:#fff;
    border-radius:20px;
    text-decoration:none;
    font-size:13px;
    font-weight:600;
}

/* RESPONSIVE */
@media(max-width:900px){
    .result{
        padding:30px 20px;
    }

    .card{
        grid-template-columns:1fr;
        text-align:left;
    }

    .card img{
        width:100%;
        height:230px;
    }

    .card-price{
        border-left:none;
        border-top:1px solid #eee;
        padding-left:0;
        padding-top:18px;
    }

    .search-box input{
        width:70%;
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
        <a href="<?= base_url('pesanan') ?>">Pesanan Anda</a>
        <a href="<?= base_url('tentang-kami') ?>">Tentang Kami</a>
    </div>
</div>

<!-- SEARCH -->
<div class="search-section">
    <h1>Cari Pekerja Rumah</h1>
    <p>Temukan pekerja terbaik sesuai kebutuhan Anda</p>
    <div class="search-box">
        <input type="text" placeholder="Cari tukang, ART, babysitter...">
        <button>Cari</button>
    </div>
</div>


<!-- RESULT -->
<div class="result">

    <div class="card">
        <img src="<?= base_url('assets/images/bangunan.jpeg') ?>">
        <div class="card-body">
            <div>
                <span class="status">TERSEDIA</span>
                <span class="rating">★ 5.0 (1 ulasan)</span>
            </div>
            <h3>Budi</h3>
            <p>📍 Jakarta Selatan • Usia 34 • 5+ Tahun Pengalaman • 4 Kali Dilihat</p>
            <p>Terdaftar Mar 2026</p>
        </div>
        <div class="card-price">
            <span>MULAI DARI</span>
            <h4>Rp200 rb/hari</h4>
            <p>
                <strong>KEAHLIAN</strong><br>
                Tukang Bangunan • Renovasi • Plester • Pengecatan
            </p>
            <a href="<?= base_url('detail_pekerja/1') ?>" class="btn">Lihat Detail</a>
        </div>
    </div>

    <div class="card">
        <img src="<?= base_url('assets/images/ART.jpeg') ?>">
        <div class="card-body">
            <div>
                <span class="status">TERSEDIA</span>
                <span class="rating">★ 4.8 (3 ulasan)</span>
            </div>
            <h3>Lala</h3>
            <p>📍 Palu • Usia 29 • 4+ Tahun Pengalaman • 6 Kali Dilihat</p>
            <p>Terdaftar Apr 2026</p>
        </div>
        <div class="card-price">
            <span>MULAI DARI</span>
            <h4>Rp150 rb/hari</h4>
            <p>
                <strong>KEAHLIAN</strong><br>
                ART Rumah Tangga • Bersih-bersih • Memasak
            </p>
            <a href="<?= base_url('detail_pekerja/2') ?>" class="btn">Lihat Detail</a>
        </div>
    </div>

    <div class="card">
        <img src="<?= base_url('assets/images/sopir.jpeg') ?>">
        <div class="card-body">
            <div>
                <span class="status">TERSEDIA</span>
                <span class="rating">★ 4.9 (2 ulasan)</span>
            </div>
            <h3>Andi</h3>
            <p>📍 Makassar • Usia 38 • 10+ Tahun Pengalaman • 8 Kali Dilihat</p>
            <p>Terdaftar Mei 2026</p>
        </div>
        <div class="card-price">
            <span>MULAI DARI</span>
            <h4>Rp180 rb/hari</h4>
            <p>
                <strong>KEAHLIAN</strong><br>
                Sopir Pribadi • Antar Jemput • Luar Kota
            </p>
            <a href="<?= base_url('detail_pekerja/3') ?>" class="btn">Lihat Detail</a>
        </div>
    </div>

</div>

</body>
</html>