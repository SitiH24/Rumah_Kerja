<?= $this->include('layout/header'); ?>

<style>
    .hero {
        min-height: 100vh;
        padding: 150px 72px 70px;
        display: grid;
        grid-template-columns: 1fr 0.95fr;
        align-items: center;
        gap: 70px;
    }

    .badge {
        display: inline-block;
        padding: 10px 20px;
        border: 1px solid #d8c9bd;
        border-radius: 999px;
        background: #ffffff;
        color: #6b4228;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 1.4px;
        margin-bottom: 22px;
    }

    .hero-left h1 {
        font-size: 58px;
        line-height: 1.12;
        font-weight: 800;
        color: #24170f;
        letter-spacing: -2px;
        margin-bottom: 22px;
        max-width: 720px;
    }

    .hero-left p {
        font-size: 16px;
        line-height: 1.8;
        color: #7b6d64;
        max-width: 560px;
        margin-bottom: 34px;
    }

    .hero-button {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
    }

    .btn-primary,
    .btn-secondary {
        text-decoration: none;
        padding: 15px 30px;
        border-radius: 999px;
        font-size: 15px;
        font-weight: 700;
    }

    .btn-primary {
        background: linear-gradient(135deg, #2c1a10, #a8774f);
        color: white;
        box-shadow: 0 18px 30px rgba(94, 56, 28, 0.23);
    }

    .btn-secondary {
        background: white;
        color: #24170f;
        border: 1.5px solid #d8c9bd;
    }

    .hero-right {
        position: relative;
    }

    .hero-right::before {
        content: "";
        position: absolute;
        width: 260px;
        height: 260px;
        background: #f0d2b5;
        border-radius: 50%;
        top: -45px;
        right: -35px;
        z-index: -1;
        opacity: 0.8;
    }

    .hero-right img {
        width: 100%;
        max-width: 610px;
        height: 380px;
        object-fit: cover;
        border-radius: 34px;
        box-shadow: 0 35px 70px rgba(73, 45, 24, 0.18);
        display: block;
    }

    @media (max-width: 992px) {
        .hero {
            grid-template-columns: 1fr;
            text-align: center;
            padding: 125px 28px 60px;
            gap: 45px;
        }

        .hero-left h1 {
            font-size: 44px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-left p {
            margin-left: auto;
            margin-right: auto;
        }

        .hero-button {
            justify-content: center;
        }

        .hero-right img {
            height: 320px;
            margin: auto;
        }
    }

    @media (max-width: 576px) {
        .hero-left h1 {
            font-size: 35px;
        }

        .hero-left p {
            font-size: 14px;
        }

        .hero-right img {
            height: 260px;
        }
    }
</style>

<section class="hero">
    <div class="hero-left">
        <div class="badge">● PLATFORM PENCARIAN TUKANG</div>

        <h1>Cari tukang terpercaya untuk proyek rumah Anda.</h1>

        <p>
            Temukan tukang profesional untuk renovasi, pembangunan rumah,
            perbaikan listrik, pipa, pengecatan, dan berbagai kebutuhan rumah lainnya.
        </p>

        <div class="hero-button">
            <a href="<?= base_url('login') ?>" class="btn-primary">Cari Tukang</a>
        </div>
    </div>

    <div class="hero-right">
        <img src="<?= base_url('assets/images/orang.jpg') ?>" alt="Tukang Rumah">
    </div>
</section>

<?= $this->include('layout/footer'); ?>