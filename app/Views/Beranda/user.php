<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>RumahKerja</title>

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
}

/* ================= NAVBAR ================= */

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
    font-size:30px;
    font-weight:800;
    color:#3f2d20;
}

.menu a{
    text-decoration:none;
    margin-left:30px;
    color:#5b4636;
    font-weight:500;
}

/* ================= HERO ================= */

.hero{
    padding:140px 60px 80px;
    display:grid;
    grid-template-columns:1.1fr 0.9fr;
    align-items:center;
    gap:70px;
}

.badge{
    display:inline-block;
    padding:10px 18px;
    border-radius:30px;
    border:1px solid #ddd;
    background:white;
    font-size:13px;
    font-weight:600;
    margin-bottom:20px;
}

.hero-text h1{
    font-size:64px;
    line-height:1.1;
    color:#24170f;
    font-weight:800;
    margin-bottom:20px;
}

.hero-text p{
    font-size:18px;
    line-height:1.8;
    color:#6d5c4d;
    margin-bottom:35px;
}

/* SEARCH */

.search-box{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    background:white;
    border-radius:20px;
    overflow:hidden;
    border:1px solid #e5e5e5;
    margin-bottom:20px;
}

.search-item{
    padding:18px 20px;
    border-right:1px solid #eee;
}

.search-item:last-child{
    border-right:none;
}

.search-item label{
    display:block;
    font-size:12px;
    color:#999;
    margin-bottom:6px;
    text-transform:uppercase;
}

.search-item select{
    width:100%;
    border:none;
    outline:none;
    font-size:15px;
    background:none;
}

.search-btn{
    display:block;
    width:100%;
    text-align:center;
    background:#A67C52;
    color:white;
    text-decoration:none;
    padding:22px;
    border-radius:18px;
    font-size:20px;
    font-weight:700;
    transition:.3s;
}

.search-btn:hover{
    background:#8B5E3C;
}

/* HERO IMAGE */

.hero-image img{
    width:100%;
    max-width:500px;
    border-radius:30px;
    object-fit:cover;
    box-shadow:0 20px 40px rgba(0,0,0,.1);
}

/* ================= PEKERJA ================= */

.pekerja{
    padding:60px;
}

.section-title{
    text-align:center;
    margin-bottom:40px;
}

.section-title h2{
    font-size:42px;
    color:#3f2d20;
    margin-bottom:10px;
}

.section-title p{
    color:#7a6b5d;
}

.card-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:24px;
}

.card{
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
    transition:.3s;
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
    font-size:24px;
    color:#3f2d20;
    margin-bottom:8px;
}

.card-body p{
    color:#6d5c4d;
    margin-bottom:8px;
}

.card-meta{
    color:#8B5E3C;
    font-size:14px;
    margin-bottom:8px;
}

.card-price{
    font-weight:700;
    color:#3f2d20;
    margin-bottom:15px;
}

.detail-btn{
    display:inline-block;
    padding:10px 20px;
    border-radius:25px;
    text-decoration:none;
    background:#A67C52;
    color:white;
    font-size:14px;
    font-weight:600;
}

/* ================= RESPONSIVE ================= */

@media(max-width:992px){

    .hero{
        grid-template-columns:1fr;
        text-align:center;
    }

    .hero-text h1{
        font-size:42px;
    }

    .search-box{
        grid-template-columns:1fr;
    }

    .card-grid{
        grid-template-columns:1fr;
    }

    .navbar{
        padding:20px;
    }

    .hero,
    .pekerja{
        padding-left:20px;
        padding-right:20px;
    }

}

</style>

</head>
<body>

<!-- NAVBAR -->

<div class="navbar">

    <div class="logo">
        RumahKerja
    </div>

    <div class="menu">
        <a href="<?= base_url('beranda') ?>">Beranda</a>
        <a href="<?= base_url('ulasan') ?>">Ulasan</a>
        <a href="<?= base_url('tentang-kami') ?>">Tentang Kami</a>
        <a href="<?= base_url('logout') ?> ">Logout</a>
    </div>

</div>

<!-- HERO -->

<section class="hero">

    <div class="hero-text">

        <div class="badge">
            ● PLATFORM PENCARIAN PEKERJA RUMAH
        </div>

        <h1>
            Temukan pekerja rumah terpercaya untuk kebutuhan Anda.
        </h1>

        <p>
            Cari ART, babysitter, sopir, tukang bangunan,
            tukang kebun dan berbagai pekerja rumah lainnya
            dengan mudah, cepat dan terpercaya.
        </p>

        <div class="search-box">

            <div class="search-item">
                <label>Lokasi</label>
                <select>
                    <option>Semua Lokasi</option>
                    <option>Besusu Barat</option>
                    <option>Besusu Tengah</option>
                    <option>Besusu Timur</option>
                    <option>Lolu Selatan</option>
                    <option>Lolu Utara</option>
                    <option>Balaroa</option>
                    <option>Baru</option>
                    <option>Kamonji</option>
                    <option>Lere</option>
                    <option>Siranindi</option>
                    <option>Ujuna</option>
                    <option>Birobuli Selatan</option>
                    <option>Birobuli Utara</option>
                    <option>Petobo</option>
                    <option>Tatura Selatan</option>
                    <option>Tatura Utara</option>
                    <option>Kawatuna</option>
                    <option>Lasoani</option>
                    <option>Layana Indah</option>
                    <option>Poboya</option>
                    <option>Talise</option>
                    <option>Talise Valangguni</option>
                    <option>Tanamodindi</option>
                    <option>Tondo</option>
                    <option>Boyaoge</option>
                    <option>Duyu</option>
                    <option>Nunu</option>
                    <option>Palupi</option>
                    <option>Pengawu</option>
                    <option>Tawanjuka</option>
                    <option>Baiya</option>
                    <option>Lambara</option>
                    <option>Panau</option>
                    <option>Pantoloan</option>
                    <option>Pantoloan Boya</option>

                    <option>Buluri</option>
                    <option>Donggala Kodi</option>
                    <option>Kabonena</option>
                    <option>Silae</option>
                    <option>Tipo</option>
                    <option>Watusampu</option>

                    <option>Kayumalue Ngapa</option>
                    <option>Kayumalue Pajeko</option>
                    <option>Mamboro</option>
                    <option>Mamboro Barat</option>
                    <option>Taipa</option>
</select>
                </select>
            </div>

            <div class="search-item">
                <label>Keahlian</label>
                <select>
                    <option>Semua Keahlian</option>
                    <option>ART</option>
                    <option>Babysitter</option>
                    <option>Sopir</option>
                    <option>Tukang Bangunan</option>
                    <!-- Pekerja Rumah Tangga -->
                    <option>Asisten Rumah Tangga (ART)</option>
                    <option>Babysitter</option>
                    <option>Perawat Lansia</option>
                    <option>Penjaga Anak</option>
                    <option>Penjaga Rumah</option>

                    <!-- Sopir -->
                    <option>Sopir Pribadi</option>
                    <option>Sopir Keluarga</option>
                    <option>Sopir Antar Jemput</option>

                    <!-- Kebersihan -->
                    <option>Petugas Kebersihan</option>
                    <option>Cleaning Service</option>
                    <option>Cuci Sofa</option>
                    <option>Cuci Karpet</option>

                    <!-- Tukang Bangunan -->
                    <option>Tukang Bangunan</option>
                    <option>Kepala Tukang</option>
                    <option>Kuli Bangunan</option>

                    <!-- Tukang Rumah -->
                    <option>Tukang Kayu</option>
                    <option>Tukang Batu</option>
                    <option>Tukang Cat</option>
                    <option>Tukang Besi</option>
                    <option>Tukang Las</option>
                    <option>Tukang Keramik</option>
                    <option>Tukang Plafon</option>

                    <!-- Instalasi -->
                    <option>Tukang Listrik</option>
                    <option>Tukang AC</option>
                    <option>Tukang Ledeng</option>
                    <option>Tukang Pipa</option>

                    <!-- Taman -->
                    <option>Tukang Kebun</option>
                    <option>Perawatan Taman</option>

                    <!-- Keamanan -->
                    <option>Satpam Rumah</option>
                    <option>Penjaga Kos</option>

                    <!-- Jasa Lain -->
                    <option>Juru Masak</option>
                    <option>Penjahit</option>
                    <option>Pengasuh Hewan</option>
                    <option>Kurir Pribadi</option>
                    <option>Serabutan</option>
                    </select>
                </select>
            </div>

            <div class="search-item">
                <label>Harga / Hari</label>
                <select>
                    <option>Semua Harga / Hari</option>

                    <option>< Rp50.000</option>
                    <option>Rp50.000 - Rp100.000</option>
                    <option>Rp100.000 - Rp150.000</option>
                    <option>Rp150.000 - Rp200.000</option>
                    <option>Rp200.000 - Rp250.000</option>
                    <option>Rp250.000 - Rp300.000</option>
                    <option>Rp300.000 - Rp350.000</option>
                    <option>Rp350.000 - Rp400.000</option>
                    <option>Rp400.000 - Rp450.000</option>
                    <option>Rp450.000 - Rp500.000</option>
                    <option>Rp500.000 - Rp600.000</option>
                    <option>Rp600.000 - Rp700.000</option>
                    <option>Rp700.000 - Rp800.000</option>
                    <option>Rp800.000 - Rp1.000.000</option>
                    <option>> Rp1.000.000</option>
                </select>
            </div>

        </div>

        <a href="<?= base_url('cari') ?>" class="search-btn">
            Cari Pekerja Sekarang
        </a>

    </div>

    <div class="hero-image">
        <img src="<?= base_url('assets/images/orang.jpg') ?>" alt="">
    </div>

</section>

<!-- PEKERJA POPULER -->

<section class="pekerja">

    <div class="section-title">
        <h2>Pekerja Populer</h2>
        <p>Pekerja terbaik yang paling banyak dipilih pengguna.</p>
    </div>

    <div class="card-grid">

        <div class="card">
            <img src="<?= base_url('assets/images/bangunan.jpeg') ?>">
            <div class="card-body">
                <h3>Budi</h3>
                <p>Tukang Bangunan</p>
                <div class="card-meta">📍 Jakarta Selatan • 5+ Tahun</div>
                <div class="card-price">Rp200.000 / hari</div>
                <a href="<?= base_url('detail_pekerja/1') ?>" class="btn">Lihat Detail</a>
            </div>
        </div>

        <div class="card">
            <img src="<?= base_url('assets/images/ART.jpeg') ?>">
            <div class="card-body">
                <h3>Lala</h3>
                <p>ART Rumah Tangga</p>
                <div class="card-meta">📍 Palu • 4+ Tahun</div>
                <div class="card-price">Rp150.000 / hari</div>
                <a href="<?= base_url('detail_pekerja/2') ?>" class="btn">Lihat Detail</a>
            </div>
        </div>

        <div class="card">
            <img src="<?= base_url('assets/images/sopir.jpeg') ?>">
            <div class="card-body">
                <h3>Andi</h3>
                <p>Sopir Pribadi</p>
                <div class="card-meta">📍 Makassar • 10+ Tahun</div>
                <div class="card-price">Rp180.000 / hari</div>
                <a href="<?= base_url('detail_pekerja/3') ?>" class="btn">Lihat Detail</a>
            </div>
        </div>

        <div class="card">
            <img src="<?= base_url('assets/images/babysitter.jpeg') ?>">
            <div class="card-body">
                <h3>Ina</h3>
                <p>Babysitter</p>
                <div class="card-meta">📍 Bandung • 3+ Tahun</div>
                <div class="card-price">Rp170.000 / hari</div>
                <a href="<?= base_url('detail_pekerja/4') ?>" class="btn">Lihat Detail</a>
            </div>
        </div>

    </div>

</section>

</body>
</html>