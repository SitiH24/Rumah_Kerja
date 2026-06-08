<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ulasan - RumahKerja</title>

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
    margin:0 12px;
    color:#5b4636;
    font-weight:600;
}

.navbar a.active{
    background:#e6cbb1;
    padding:10px 24px;
    border-radius:30px;
    color:#4a2f1d;
}

/* HERO */
.hero{
    padding:135px 60px 45px;
    text-align:center;
}

.hero span{
    font-size:13px;
    font-weight:700;
    color:#8B5E3C;
    letter-spacing:2px;
}

.hero h1{
    margin-top:12px;
    font-size:42px;
    color:#3f2d20;
}

.hero p{
    margin-top:10px;
    color:#6d5c4d;
}

/* STATS */
.stats{
    padding:0 60px 35px;
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
}

.stat-card{
    background:#fff;
    border-radius:18px;
    padding:24px;
    text-align:center;
    box-shadow:0 12px 28px rgba(0,0,0,0.06);
}

.stat-card h2{
    color:#8B5E3C;
    font-size:32px;
}

.stat-card p{
    color:#6d5c4d;
    font-size:14px;
}

/* REVIEW */
.review-section{
    padding:20px 60px 70px;
}

.review-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:24px;
}

.review-header h2{
    font-size:28px;
}

.btn-review{
    background:#A67C52;
    color:#fff;
    padding:12px 22px;
    border-radius:30px;
    text-decoration:none;
    font-weight:600;
}

.review-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:24px;
}

.review-card{
    background:#fff;
    border-radius:20px;
    padding:26px;
    box-shadow:0 12px 28px rgba(0,0,0,0.06);
    transition:.3s;
}

.review-card:hover{
    transform:translateY(-5px);
}

.review-top{
    display:flex;
    align-items:center;
    gap:14px;
    margin-bottom:16px;
}

.avatar{
    width:55px;
    height:55px;
    border-radius:50%;
    background:#e6cbb1;
    color:#5b3a25;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:22px;
    font-weight:800;
}

.review-top h3{
    font-size:18px;
    color:#3f2d20;
}

.review-top p{
    font-size:13px;
    color:#8B5E3C;
}

.stars{
    color:#f2b01e;
    font-size:18px;
    margin-bottom:12px;
}

.comment{
    color:#5b4636;
    font-size:14px;
    line-height:1.8;
}

.worker{
    margin-top:18px;
    padding-top:14px;
    border-top:1px solid #eee;
    font-size:13px;
    color:#8B5E3C;
    font-weight:600;
}

/* FORM */
.form-box{
    margin-top:35px;
    background:#fff;
    border-radius:20px;
    padding:28px;
    box-shadow:0 12px 28px rgba(0,0,0,0.06);
}

.form-box h2{
    margin-bottom:20px;
}

.form-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:18px;
}

.input-group label{
    display:block;
    font-size:14px;
    font-weight:600;
    margin-bottom:8px;
}

.input-group input,
.input-group select,
.input-group textarea{
    width:100%;
    padding:14px 16px;
    border:1px solid #ddd;
    border-radius:14px;
    outline:none;
}

.input-group textarea{
    min-height:120px;
    resize:none;
}

.full{
    grid-column:1 / 3;
}

.submit-btn{
    margin-top:18px;
    border:none;
    background:#A67C52;
    color:white;
    padding:14px 28px;
    border-radius:30px;
    font-weight:700;
    cursor:pointer;
}

/* FOOTER */
.footer{
    background:#111827;
    color:#fff;
    text-align:center;
    padding:24px;
}

/* RESPONSIVE */
@media(max-width:900px){
    .navbar{
        padding:18px 20px;
    }

    .hero,
    .stats,
    .review-section{
        padding-left:20px;
        padding-right:20px;
    }

    .stats,
    .review-grid,
    .form-grid{
        grid-template-columns:1fr;
    }

    .full{
        grid-column:1;
    }

    .hero h1{
        font-size:32px;
    }

    .review-header{
        flex-direction:column;
        gap:14px;
        align-items:flex-start;
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
        <a href="<?= base_url('ulasan') ?>" class="active">Ulasan</a>
        <a href="<?= base_url('tentang-kami') ?>">Tentang Kami</a>
        <a href="<?= base_url('logout') ?>">Logout</a>
    </div>
</div>

<!-- HERO -->
<section class="hero">
    <span>ULASAN PENGGUNA</span>
    <h1>Apa kata mereka?</h1>
    <p>Lihat pengalaman pengguna setelah menggunakan jasa pekerja rumah di RumahKerja.</p>
</section>

<!-- STATS -->
<section class="stats">
    <div class="stat-card">
        <h2>4.9</h2>
        <p>Rating Rata-rata</p>
    </div>

    <div class="stat-card">
        <h2>120+</h2>
        <p>Ulasan Masuk</p>
    </div>

    <div class="stat-card">
        <h2>98%</h2>
        <p>Pengguna Puas</p>
    </div>
</section>

<!-- REVIEW -->
<section class="review-section">

    <div class="review-header">
        <h2>Ulasan Terbaru</h2>
        <a href="#form-ulasan" class="btn-review">Tulis Ulasan</a>
    </div>

    <div class="review-grid">

        <div class="review-card">
            <div class="review-top">
                <div class="avatar">R</div>
                <div>
                    <h3>Rina</h3>
                    <p>Jakarta Selatan</p>
                </div>
            </div>

            <div class="stars">★★★★★</div>

            <p class="comment">
                Pekerjanya datang tepat waktu, hasil kerja rapi, dan komunikasinya sangat baik.
                Sangat membantu untuk renovasi kecil di rumah.
            </p>

            <div class="worker">Untuk: Budi - Tukang Bangunan</div>
        </div>

        <div class="review-card">
            <div class="review-top">
                <div class="avatar">D</div>
                <div>
                    <h3>Dewi</h3>
                    <p>Palu</p>
                </div>
            </div>

            <div class="stars">★★★★☆</div>

            <p class="comment">
                Lala sangat telaten dan ramah. Pekerjaan rumah jadi lebih ringan.
                Pelayanannya juga sopan.
            </p>

            <div class="worker">Untuk: Lala - ART Rumah Tangga</div>
        </div>

        <div class="review-card">
            <div class="review-top">
                <div class="avatar">A</div>
                <div>
                    <h3>Agus</h3>
                    <p>Makassar</p>
                </div>
            </div>

            <div class="stars">★★★★★</div>

            <p class="comment">
                Sopirnya aman, sopan, dan tepat waktu. Sangat direkomendasikan untuk perjalanan harian.
            </p>

            <div class="worker">Untuk: Andi - Sopir Pribadi</div>
        </div>

    </div>

    <!-- FORM -->
    <div class="form-box" id="form-ulasan">
        <h2>Tulis Ulasan Anda</h2>

        <form action="#" method="post">
            <div class="form-grid">
                <div class="input-group">
                    <label>Nama Anda</label>
                    <input type="text" name="nama" placeholder="Masukkan nama">
                </div>

                <div class="input-group">
                    <label>Pekerja</label>
                    <select name="pekerja">
                        <option>Pilih pekerja</option>
                        <option>Budi - Tukang Bangunan</option>
                        <option>Lala - ART Rumah Tangga</option>
                        <option>Andi - Sopir Pribadi</option>
                    </select>
                </div>

                <div class="input-group full">
                    <label>Rating</label>
                    <select name="rating">
                        <option>5 - Sangat Puas</option>
                        <option>4 - Puas</option>
                        <option>3 - Cukup</option>
                        <option>2 - Kurang</option>
                        <option>1 - Tidak Puas</option>
                    </select>
                </div>

                <div class="input-group full">
                    <label>Ulasan</label>
                    <textarea name="ulasan" placeholder="Tulis pengalaman Anda..."></textarea>
                </div>
            </div>

            <button type="submit" class="submit-btn">Kirim Ulasan</button>
        </form>
    </div>

</section>

<footer class="footer">
    © 2026 RumahKerja - Sistem Informasi Jasa Pekerja Rumah
</footer>

</body>
</html>