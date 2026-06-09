<?= $this->include('layout/header'); ?>

<style>

body{
    background:#f8f5f1;
}

/* HERO */
.hero{
    min-height:85vh;
    padding:140px 70px 40px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:60px;
}

.hero-left{
    flex:1;
}

.badge{
    display:inline-block;
    padding:10px 22px;
    border:1px solid #d8c9bd;
    border-radius:50px;
    background:#fff;
    color:#6b4228;
    font-size:13px;
    font-weight:600;
    margin-bottom:25px;
}

.hero-left h1{
    font-size:72px;
    line-height:1.1;
    color:#24170f;
    font-weight:800;
    margin-bottom:20px;
}

.hero-left p{
    font-size:18px;
    color:#6f6258;
    line-height:1.8;
    max-width:600px;
    margin-bottom:35px;
}

/* BUTTON LEBIH BESAR */
.btn-primary{
    text-decoration:none;
    display:flex;
    justify-content:center;
    align-items:center;

    width:300px;
    height:90px;

    background:linear-gradient(135deg,#4a2510,#b07d52);
    color:white;

    font-size:28px;
    font-weight:700;

    border-radius:70px;
    box-shadow:0 12px 25px rgba(0,0,0,.15);
    transition:.3s;
}

/* PEKERJA POPULER */
/* JARAK DIDEKATKAN */
.populer{
    padding:20px 70px 80px;
}

.populer-title{
    text-align:center;
    margin-bottom:40px;
}

.populer-title h2{
    font-size:54px;
    color:#24170f;
    margin-bottom:10px;
}

.populer-title p{
    color:#7b6d64;
    font-size:17px;
}

.card-container{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
}

.card{
    background:white;
    border-radius:25px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
    transition:.3s;
}

.card:hover{
    transform:translateY(-8px);
}

.card img{
    width:100%;
    height:240px;
    object-fit:cover;
}

.card-body{
    padding:25px;
}

.card-body h3{
    font-size:36px;
    color:#24170f;
    margin-bottom:10px;
}

.job{
    display:inline-block;
    padding:8px 18px;
    background:#f3e2cf;
    border-radius:50px;
    color:#9b6a42;
    font-size:14px;
    margin-bottom:15px;
}

.info{
    color:#6f6258;
    font-size:18px;
    line-height:2;
}

/* RESPONSIVE */
@media(max-width:992px){

    .hero{
        flex-direction:column;
        text-align:center;
        padding:120px 25px 30px;
    }

    .hero-left h1{
        font-size:50px;
    }

    .hero-right img{
        height:320px;
    }

    .populer{
        padding:10px 25px 60px;
    }

    .card-container{
        grid-template-columns:1fr;
    }

    .populer-title h2{
        font-size:40px;
    }
}

</style>

<section class="hero">

    <div class="hero-left">

        <div class="badge">
            ● PLATFORM PENCARIAN TUKANG
        </div>

        <h1>
            Jasa Tukang & Pekerja Rumah Lokal
        </h1>

        <p>
            Temukan pekerja rumah profesional seperti tukang,
            ART, babysitter, sopir, dan pekerja rumah lainnya
            dengan cepat dan terpercaya.
        </p>

        <a href="<?= base_url('login') ?>" class="btn-primary">
            Cari Tukang
        </a>

    </div>

    <div class="hero-right">
        <img src="<?= base_url('assets/images/orang.jpg') ?>" alt="Tukang">
    </div>

</section>

<section class="populer">

    <div class="populer-title">
        <h2>Pekerja Populer</h2>
        <p>Pekerja terbaik yang paling banyak dipilih pengguna.</p>
    </div>

    <div class="card-container">

        <div class="card">
            <img src="<?= base_url('assets/images/bangunan.jpeg') ?>" alt="Budi">

            <div class="card-body">
                <h3>Budi</h3>

                <div class="job">Tukang Bangunan</div>

                <div class="info">
                    📍 Jakarta Selatan <br>
                    ⭐ 4.9 / 5.0 <br>
                    👷 5 Tahun Pengalaman
                </div>
            </div>
        </div>

        <div class="card">
            <img src="<?= base_url('assets/images/ART.jpeg') ?>" alt="Lala">

            <div class="card-body">
                <h3>Lala</h3>

                <div class="job">ART Rumah Tangga</div>

                <div class="info">
                    📍 Palu <br>
                    ⭐ 4.8 / 5.0 <br>
                    👩‍🍳 4 Tahun Pengalaman
                </div>
            </div>
        </div>

        <div class="card">
            <img src="<?= base_url('assets/images/sopir.jpeg') ?>" alt="Andi">

            <div class="card-body">
                <h3>Andi</h3>

                <div class="job">Sopir Pribadi</div>

                <div class="info">
                    📍 Makassar <br>
                    ⭐ 5.0 / 5.0 <br>
                    🚗 10 Tahun Pengalaman
                </div>
            </div>
        </div>

    </div>

</section>

<?= $this->include('layout/footer'); ?>