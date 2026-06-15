<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cari Pekerja - RumahKerja</title>

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
    font-size:24px;
    font-weight:700;
    color:#8B5E3C;
}

.navbar a{
    text-decoration:none;
    margin-left:20px;
    color:#5b4636;
    font-weight:500;
}

/* HEADER */
.search-section{
    padding:130px 60px 40px;
    text-align:center;
}

.search-section h1{
    font-size:40px;
    color:#3f2d20;
}

.search-section p{
    margin-top:10px;
    color:#6d5c4d;
}

/* FILTER BOX */
.filter-box{
    background:#fff;
    padding:25px;
    border-radius:20px;
    margin-top:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
}

.search-box{
    display:flex;
    gap:20px;
    flex-wrap:wrap;
    justify-content:center;
}

.search-item{
    flex:1;
    min-width:250px;
    text-align:left;
}

.search-item label{
    display:block;
    margin-bottom:8px;
    font-size:14px;
    font-weight:600;
    color:#5b4636;
}

.search-item select{
    width:100%;
    padding:14px;
    border:1px solid #ddd;
    border-radius:10px;
    outline:none;
}

.search-btn{
    margin-top:25px;
    background:#A67C52;
    color:#fff;
    border:none;
    padding:15px 30px;
    border-radius:30px;
    cursor:pointer;
    font-size:15px;
    font-weight:600;
}

.search-btn:hover{
    background:#8B5E3C;
}

/* RESULT */
.result{
    padding:20px 60px 50px;
    display:grid;
    gap:20px;
}

.card{
    background:#fff;
    border-radius:18px;
    padding:20px;
    display:grid;
    grid-template-columns:170px 1fr 250px;
    gap:20px;
    box-shadow:0 8px 20px rgba(0,0,0,.06);
}

.card img{
    width:150px;
    height:150px;
    object-fit:cover;
    border-radius:15px;
}

.status{
    background:#000;
    color:#fff;
    padding:5px 10px;
    border-radius:20px;
    font-size:11px;
}

.rating{
    margin-left:10px;
}

.card-body h3{
    margin-top:10px;
    color:#3f2d20;
}

.card-body p{
    color:#666;
    margin-top:8px;
}

.card-price{
    border-left:1px solid #eee;
    padding-left:20px;
}

.card-price span{
    color:#999;
    font-size:12px;
}

.card-price h4{
    margin:10px 0;
}

.btn{
    display:inline-block;
    margin-top:15px;
    background:#A67C52;
    color:#fff;
    text-decoration:none;
    padding:10px 20px;
    border-radius:20px;
}

@media(max-width:900px){

    .navbar{
        padding:20px;
    }

    .search-section{
        padding:120px 20px 30px;
    }

    .result{
        padding:20px;
    }

    .card{
        grid-template-columns:1fr;
    }

    .card img{
        width:100%;
        height:250px;
    }

    .card-price{
        border-left:none;
        border-top:1px solid #eee;
        padding-top:20px;
        padding-left:0;
    }
}
</style>
</head>
<body>

<div class="navbar">
    <div class="logo">RumahKerja</div>

    <div>
        <a href="<?= base_url('beranda') ?>">Beranda</a>
        <a href="<?= base_url('pesanan') ?>">Pesanan</a>
        <a href="<?= base_url('tentang-kami') ?>">Tentang Kami</a>
    </div>
</div>

<div class="search-section">

    <h1>Cari Pekerja Rumah</h1>
    <p>Temukan pekerja terbaik sesuai kebutuhan Anda</p>

    <form action="<?= base_url('cari') ?>" method="GET" class="filter-box">

        <div class="search-box">

            <div class="search-item">
                <label>Lokasi</label>
                <select name="lokasi">
                    <option value="">Semua Lokasi</option>
                    <option value="Besusu Barat">Besusu Barat</option>
                    <option value="Besusu Tengah">Besusu Tengah</option>
                    <option value="Lolu Selatan">Lolu Selatan</option>
                    <option value="Tondo">Tondo</option>
                    <option value="Talise">Talise</option>
                    <option value="Birobuli Selatan">Birobuli Selatan</option>
                    <option value="Petobo">Petobo</option>
                </select>
            </div>

            <div class="search-item">
                <label>Keahlian</label>
                <select name="keahlian">
                    <option value="">Semua Keahlian</option>
                    <option value="ART">ART</option>
                    <option value="Babysitter">Babysitter</option>
                    <option value="Sopir">Sopir</option>
                    <option value="Tukang Bangunan">Tukang Bangunan</option>
                    <option value="Tukang Listrik">Tukang Listrik</option>
                    <option value="Cleaning Service">Cleaning Service</option>
                </select>
            </div>

            <div class="search-item">
                <label>Harga / Hari</label>
                <select name="harga">
                    <option value="">Semua Harga</option>
                    <option value="50000">< Rp50.000</option>
                    <option value="100000">Rp50.000 - Rp100.000</option>
                    <option value="200000">Rp100.000 - Rp200.000</option>
                    <option value="300000">Rp200.000 - Rp300.000</option>
                    <option value="1000000">> Rp1.000.000</option>
                </select>
            </div>

        </div>

        <button type="submit" class="search-btn">
            Cari Pekerja Sekarang
        </button>

    </form>

</div>

<div class="result">

    <?php if(!empty($pekerja)): ?>

        <?php foreach($pekerja as $p): ?>

        <div class="card">

            <img src="<?= base_url('assets/images/'.$p['foto']) ?>">

            <div class="card-body">

                <span class="status">TERSEDIA</span>

                <span class="rating">
                    ★ <?= $p['rating'] ?>
                </span>

                <h3><?= $p['nama'] ?></h3>

                <p>
                    📍 <?= $p['lokasi'] ?>
                    • Usia <?= $p['usia'] ?>
                </p>

                <p>
                    <?= $p['pengalaman'] ?> Tahun Pengalaman
                </p>

            </div>

            <div class="card-price">

                <span>MULAI DARI</span>

                <h4>
                    Rp<?= number_format($p['harga'],0,',','.') ?>/hari
                </h4>

                <p>
                    <strong>KEAHLIAN</strong><br>
                    <?= $p['keahlian'] ?>
                </p>

                <a href="<?= base_url('detail_pekerja/'.$p['id']) ?>" class="btn">
                    Lihat Detail
                </a>

            </div>

        </div>

        <?php endforeach; ?>

    <?php else: ?>

        <h3 style="text-align:center">
            Tidak ada pekerja yang sesuai dengan filter pencarian.
        </h3>

    <?php endif; ?>

</div>

</body>
</html>