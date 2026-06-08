<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Pekerja - RumahKerja</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

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
    font-weight:800;
    color:#8B5E3C;
}

.navbar a{
    text-decoration:none;
    margin-left:22px;
    color:#5b4636;
    font-weight:600;
}

/* WRAPPER */
.wrapper{
    padding:130px 60px 60px;
}

/* DETAIL CARD */
.detail-card{
    max-width:1100px;
    margin:auto;
    background:#fff;
    border-radius:28px;
    box-shadow:0 20px 45px rgba(0,0,0,0.08);
    overflow:hidden;
    display:grid;
    grid-template-columns:1.2fr 0.8fr;
}

.left-content{
    padding:42px;
    border-right:1px solid #eee;
}

.badge{
    display:inline-block;
    background:#000;
    color:#fff;
    padding:7px 16px;
    border-radius:20px;
    font-size:12px;
    font-weight:700;
    margin-bottom:18px;
}

.rating{
    display:inline-block;
    margin-left:10px;
    font-weight:700;
    color:#111827;
}

.left-content h1{
    font-size:42px;
    color:#3f2d20;
    margin-bottom:16px;
}

.info{
    color:#6d5c4d;
    font-size:16px;
    line-height:1.9;
    margin-bottom:24px;
}

.divider{
    height:1px;
    background:#eee;
    margin:24px 0;
}

.section-title{
    font-size:13px;
    color:#9a8f87;
    font-weight:800;
    letter-spacing:1.5px;
    margin-bottom:14px;
}

.skills{
    display:flex;
    flex-wrap:wrap;
    gap:10px;
}

.skills span{
    padding:10px 16px;
    border:1px solid #eaded4;
    border-radius:24px;
    color:#5b4636;
    background:#fffaf5;
    font-size:13px;
    font-weight:600;
}

.description{
    color:#6d5c4d;
    line-height:1.8;
    font-size:15px;
}

/* RIGHT CONTENT */
.right-content{
    padding:42px;
    background:#fffdfb;
}

.profile-img{
    width:100%;
    height:290px;
    object-fit:cover;
    border-radius:24px;
    margin-bottom:22px;
}

.status-row{
    display:flex;
    gap:10px;
    margin-bottom:20px;
    flex-wrap:wrap;
}

.status{
    background:#000;
    color:#fff;
    padding:7px 14px;
    border-radius:20px;
    font-size:12px;
    font-weight:700;
}

.verified{
    background:#fff;
    color:#5b4636;
    border:1px solid #eaded4;
    padding:7px 14px;
    border-radius:20px;
    font-size:12px;
    font-weight:700;
}

.price-box{
    border-top:1px solid #eee;
    border-bottom:1px solid #eee;
    padding:22px 0;
    margin:22px 0;
}

.price-box span{
    color:#9a8f87;
    font-size:13px;
    font-weight:800;
    letter-spacing:1.5px;
}

.price-box h2{
    font-size:36px;
    color:#111827;
    margin-top:8px;
}

.btn-group{
    display:flex;
    gap:12px;
    flex-wrap:wrap;
}

.btn{
    display:inline-block;
    text-decoration:none;
    padding:14px 24px;
    border-radius:28px;
    font-weight:700;
    font-size:14px;
}

.btn-primary{
    background:#A67C52;
    color:#fff;
}

.btn-secondary{
    background:#fff;
    color:#8B5E3C;
    border:1px solid #c7a17a;
}

.review-box{
    max-width:1100px;
    margin:28px auto 0;
    background:#fff;
    border-radius:24px;
    padding:30px;
    box-shadow:0 12px 30px rgba(0,0,0,0.06);
}

.review-box h2{
    margin-bottom:18px;
}

.review-card{
    border:1px solid #eee;
    border-radius:18px;
    padding:20px;
}

.review-card h3{
    font-size:16px;
}

.review-card p{
    color:#6d5c4d;
    margin-top:8px;
    line-height:1.7;
}

/* RESPONSIVE */
@media(max-width:900px){
    .navbar{
        padding:18px 20px;
    }

    .wrapper{
        padding:110px 20px 40px;
    }

    .detail-card{
        grid-template-columns:1fr;
    }

    .left-content{
        border-right:none;
        border-bottom:1px solid #eee;
        padding:28px;
    }

    .right-content{
        padding:28px;
    }

    .left-content h1{
        font-size:32px;
    }

    .price-box h2{
        font-size:28px;
    }
}
</style>
</head>

<body>

<div class="navbar">
    <div class="logo">RumahKerja</div>
    <div>
        <a href="<?= base_url('beranda') ?>">Beranda</a>
        <a href="<?= base_url('cari') ?>">Cari Pekerja</a>
        <a href="<?= base_url('pesanan') ?>">Pesanan Anda</a>
    </div>
</div>

<div class="wrapper">

    <div class="detail-card">

        <div class="left-content">
            <div>
                <span class="badge">PROFIL PEKERJA</span>
                <span class="rating">★ <?= $pekerja['rating'] ?> (<?= $pekerja['ulasan'] ?? $pekerja['ulasan_count'] ?>)</span>
            </div>

            <h1><?= $pekerja['nama'] ?></h1>

            <div class="info">
                📍 <?= $pekerja['kota'] ?> • 
                Usia <?= $pekerja['usia'] ?> • 
                <?= $pekerja['pengalaman'] ?> Pengalaman
                <br>
                <?= $pekerja['profesi'] ?> • Terdaftar Mar 2026
            </div>

            <div class="divider"></div>

            <div class="section-title">KEAHLIAN</div>

            <div class="skills">
                <?php foreach(explode(',', $pekerja['keahlian']) as $skill): ?>
                    <span><?= trim($skill) ?></span>
                <?php endforeach; ?>
            </div>

            <div class="divider"></div>

            <div class="section-title">DESKRIPSI</div>
            <p class="description">
                <?= $pekerja['deskripsi'] ?>
            </p>
        </div>

        <div class="right-content">
            <img class="profile-img" src="<?= base_url('assets/images/' . $pekerja['foto']) ?>" alt="<?= $pekerja['nama'] ?>">

            <div class="status-row">
                <span class="status">TERSEDIA</span>
                <span class="verified">TERVERIFIKASI</span>
            </div>

            <p class="info">Pekerja ini siap membantu kebutuhan rumah Anda dengan layanan terpercaya.</p>

            <div class="price-box">
                <span>MULAI DARI</span>
                <h2><?= $pekerja['harga'] ?></h2>
            </div>

            <div class="btn-group">
                <a href="<?= base_url('pesanan') ?>" class="btn btn-primary">Pesan Sekarang</a>
                <a href="<?= base_url('cari') ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>

    </div>

    <div class="review-box">
        <h2>Ulasan Pelanggan</h2>

        <div class="review-card">
            <h3>Muhammad Rivaldy <span style="color:#f2b01e;">★ 5.0</span></h3>
            <p>
                Pekerjanya rapi, cepat, dan komunikatif. Sangat membantu untuk kebutuhan rumah.
                Recommended banget.
            </p>
        </div>
    </div>

</div>

</body>
</html>