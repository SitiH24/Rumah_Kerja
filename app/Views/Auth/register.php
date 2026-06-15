<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Rumah Kerja</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background:
                radial-gradient(circle at bottom right, #f0d2b5 0, transparent 34%),
                linear-gradient(135deg, #fffaf5, #f5eee8);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .auth-wrapper {
            width: 100%;
            max-width: 1080px;
            min-height: 660px;
            background: rgba(255, 255, 255, 0.84);
            backdrop-filter: blur(18px);
            border-radius: 34px;
            overflow: hidden;
            display: grid;
            grid-template-columns: 0.95fr 1.05fr;
            box-shadow: 0 35px 80px rgba(73, 45, 24, 0.18);
        }

        .auth-left {
            background: linear-gradient(145deg, #a8774f, #2c1a10);
            color: #fff;
            padding: 60px;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
        }

        .auth-left::before {
            content: "";
            position: absolute;
            width: 330px;
            height: 330px;
            background: rgba(255,255,255,0.13);
            border-radius: 50%;
            top: -100px;
            left: -100px;
        }

        .auth-left::after {
            content: "";
            position: absolute;
            width: 240px;
            height: 240px;
            background: rgba(255,255,255,0.10);
            border-radius: 50%;
            bottom: -80px;
            right: -70px;
        }

        .brand {
            position: relative;
            z-index: 2;
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .hero-text {
            position: relative;
            z-index: 2;
        }

        .hero-text span {
            display: inline-block;
            background: rgba(255,255,255,0.16);
            border: 1px solid rgba(255,255,255,0.24);
            padding: 9px 16px;
            border-radius: 999px;
            font-size: 12px;
            letter-spacing: 1.5px;
            margin-bottom: 22px;
            text-transform: uppercase;
        }

        .hero-text h1 {
            font-size: 46px;
            line-height: 1.08;
            letter-spacing: -2px;
            margin-bottom: 18px;
        }

        .hero-text p {
            color: rgba(255,255,255,0.82);
            line-height: 1.8;
            font-size: 15px;
            max-width: 420px;
        }

        .auth-note {
            position: relative;
            z-index: 2;
            font-size: 13px;
            color: rgba(255,255,255,0.72);
        }

        .auth-right {
            padding: 56px 62px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-header {
            margin-bottom: 28px;
        }

        .form-header h2 {
            font-size: 38px;
            color: #24170f;
            letter-spacing: -1.5px;
            margin-bottom: 8px;
        }

        .form-header p {
            color: #8c7b70;
            font-size: 14px;
        }

        .input-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }

        .input-group {
            margin-bottom: 16px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 13px;
            font-weight: 600;
            color: #4a3528;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            height: 54px;
            border: 1.5px solid #eaded4;
            border-radius: 16px;
            padding: 0 18px;
            font-size: 14px;
            color: #2b1b12;
            outline: none;
            background: #fffdfb;
            transition: 0.25s ease;
        }

        .input-group input:focus,
        .input-group select:focus {
            border-color: #a8774f;
            box-shadow: 0 0 0 5px rgba(168,119,79,0.13);
        }

        .terms {
            margin: 2px 0 22px;
            font-size: 13px;
            color: #75665e;
            line-height: 1.6;
        }

        .terms input {
            margin-right: 7px;
        }

        .terms a {
            color: #6b4228;
            font-weight: 700;
            text-decoration: none;
        }

        .btn-auth {
            width: 100%;
            height: 56px;
            border: none;
            border-radius: 17px;
            background: linear-gradient(135deg, #2c1a10, #a8774f);
            color: #fff;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 18px 30px rgba(94, 56, 28, 0.23);
            transition: 0.25s ease;
        }

        .btn-auth:hover {
            transform: translateY(-2px);
            box-shadow: 0 24px 38px rgba(94, 56, 28, 0.30);
        }

        .switch-link {
            margin-top: 24px;
            text-align: center;
            font-size: 14px;
            color: #7b6d64;
        }

        .switch-link a {
            color: #6b4228;
            font-weight: 700;
            text-decoration: none;
        }

        @media (max-width: 900px) {
            .auth-wrapper {
                grid-template-columns: 1fr;
            }

            .auth-left {
                min-height: 330px;
                padding: 38px;
            }

            .hero-text h1 {
                font-size: 35px;
            }

            .auth-right {
                padding: 42px 30px;
            }
        }

        @media (max-width: 560px) {
            .input-row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            body {
                padding: 18px;
            }
        }
    </style>
</head>

<body>
    <main class="auth-wrapper">
        <section class="auth-left">
            <div class="brand">RumahKerja</div>

            <div class="hero-text">
                <span>Mulai Sekarang</span>
                <h1>Buat akun dan temukan bantuan rumah terbaik.</h1>
                <p>Daftar untuk mencari pekerja rumah, memesan jasa, menyimpan profil favorit, dan mengelola kebutuhan rumah dengan praktis.</p>
            </div>

            <div class="auth-note">Aman, cepat, dan terpercaya untuk kebutuhan rumahmu.</div>
        </section>

        <section class="auth-right">
            <div class="form-header">
                <h2>Daftar</h2>
                <p>Buat akun baru. Tenang, cuma sebentar. Anti ribet club.</p>
            </div>

            <form action="/register" method="post">
                <?= csrf_field() ?>

                <div class="input-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
                </div>

                <div class="input-row">
                    <div class="input-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="contoh@email.com" required>
                    </div>

                    <div class="input-group">
                        <label>No. HP</label>
                        <input type="text" name="no_hp" placeholder="08xxxxxxxxxx" required>
                    </div>
                </div>

                <div class="input-group">
                    <label>Daftar Sebagai</label>
                    <select name="role" required>
                        <option value="">Pilih role</option>
                        <option value="admin">Admin</option>
                        <option value="pelanggan">Pencari Jasa</option>
                        <option value="pekerja">Pekerja/Tukang</option>
                    </select>
                </div>

                <div class="input-row">
                    <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Buat password" required>
                    </div>

                    <div class="input-group">
                        <label>Konfirmasi</label>
                        <input type="password" name="password_confirm" placeholder="Ulangi password" required>
                    </div>
                </div>

                <div class="terms">
                    <label>
                        <input type="checkbox" required>
                        Saya setuju dengan <a href="#">Syarat & Ketentuan</a>.
                    </label>
                </div>

                <button type="submit" class="btn-auth">Buat Akun</button>
            </form>

            <div class="switch-link">
                Sudah punya akun? <a href="/login">Login sekarang</a>
            </div>
        </section>
    </main>
</body>
</html>