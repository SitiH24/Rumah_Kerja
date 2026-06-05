<?= $this->include('layout/header'); ?>


<style>
.hero{
    min-height:100vh;
    padding:140px 80px 60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:80px;
}

.hero-left{
    flex:1;
}

.badge{
    display:inline-block;
    padding:12px 25px;
    border:1px solid #d1d5db;
    border-radius:50px;
    font-size:14px;
    letter-spacing:2px;
    color:#111827;
    margin-bottom:30px;
    background:#fff;
}

.hero-left h1{
    font-size:82px;
    line-height:1.05;
    font-weight:800;
    color:#0f172a;
    margin-bottom:25px;
}

.hero-left p{
    font-size:18px;
    line-height:1.8;
    color:#6b7280;
    max-width:600px;
    margin-bottom:40px;
}

.hero-button{
    display:flex;
    gap:20px;
}

.btn-primary{
    text-decoration:none;
    background:#000;
    color:#fff;
    padding:16px 35px;
    border-radius:50px;
    font-weight:600;
    transition:0.3s;
}

.btn-primary:hover{
    background:#1f2937;
}

.btn-secondary{
    text-decoration:none;
    border:1px solid #d1d5db;
    color:#111827;
    padding:16px 35px;
    border-radius:50px;
    font-weight:600;
    transition:0.3s;
}

.btn-secondary:hover{
    background:#f3f4f6;
}

.hero-right{
    flex:1;
    display:flex;
    justify-content:center;
}

.hero-right img{
    width:100%;
    max-width:650px;
    border-radius:40px;
    object-fit:cover;
    box-shadow:0 15px 35px rgba(0,0,0,.1);
}

@media(max-width:992px){

    .hero{
        flex-direction:column;
        text-align:center;
        padding-top:150px;
    }

    .hero-left h1{
        font-size:60px;
    }

    .hero-button{
        justify-content:center;
    }
}

@media(max-width:768px){

    .hero{
        padding:130px 20px 50px;
    }

    .hero-left h1{
        font-size:45px;
    }

    .hero-left p{
        font-size:16px;
    }

    .hero-button{
        flex-direction:column;
        align-items:center;
    }

    .btn-primary,
    .btn-secondary{
        width:220px;
        text-align:center;
    }
}
</style>

<section class="hero">

    <div class="hero-left">

        <div class="badge">
            ● PLATFORM PENCARIAN TUKANG
        </div>

        <h1>
            Cari tukang <br>
            terpercaya <br>
            untuk proyek <br>
            rumah Anda.
        </h1>

        <p>
            Temukan tukang profesional untuk renovasi,
            pembangunan rumah, perbaikan listrik, pipa,
            pengecatan, dan berbagai kebutuhan lainnya.
        </p>

        <div class="hero-button">
            <a href="#" class="btn-primary">
                Cari Tukang
            </a>

            <a href="#" class="btn-secondary">
                Pelajari Lebih Lanjut
            </a>
        </div>

    </div>

    <div class="hero-right">
        <img src="<?= base_url('assets/images/tukang.jpg') ?>" alt="Tukang">
    </div>

</section>

</body>
</html>
<?= $this->include('layout/footer'); ?>