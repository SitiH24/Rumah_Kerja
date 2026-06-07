<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cari Pekerja - Rumah_Kerja</title>

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
    margin-bottom:15px;
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

/* RESULT */
.result{
    padding:40px 60px;
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
}

/* CARD */
.card{
    background:#fff;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 10px 20px rgba(0,0,0,0.05);
}

.card img{
    width:100%;
    height:180px;
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
    display:inline-block;
    margin-top:10px;
    padding:10px 15px;
    background:#A67C52;
    color:#fff;
    border-radius:20px;
    text-decoration:none;
    font-size:13px;
}

/* RESPONSIVE */
@media(max-width:900px){

    .result{
        grid-template-columns:1fr;
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
    <div class="logo">🏠 Rumah_Kerja</div>
    <div>
        <a href="<?= base_url('beranda') ?>">Beranda</a>
        <a href="<?= base_url('cari') ?>">Cari</a>
        <a href="<?= base_url('login') ?>">Login</a>
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

    <div class="filter">
        <button>Semua</button>
        <button>ART</button>
        <button>Tukang</button>
        <button>Babysitter</button>
        <button>Sopir</button>
    </div>

</div>

<!-- RESULT -->
<div class="result">

    <div class="card">
        <img src="<?= base_url('assets/images/orang.jpg') ?>">
        <div class="card-body">
            <h3>Budi</h3>
            <p>Tukang Bangunan</p>
            <a href="#" class="btn">Detail</a>
        </div>
    </div>

    <div class="card">
        <img src="<?= base_url('assets/images/orang.jpg') ?>">
        <div class="card-body">
            <h3>Siti</h3>
            <p>ART Rumah Tangga</p>
            <a href="#" class="btn">Detail</a>
        </div>
    </div>

    <div class="card">
        <img src="<?= base_url('assets/images/orang.jpg') ?>">
        <div class="card-body">
            <h3>Andi</h3>
            <p>Sopir Pribadi</p>
            <a href="#" class="btn">Detail</a>
        </div>
    </div>

</div>

</body>
</html>