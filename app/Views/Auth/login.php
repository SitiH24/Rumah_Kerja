<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Rumah Kerja</title>

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
                radial-gradient(circle at top left, #f3d8bd 0, transparent 35%),
                linear-gradient(135deg, #fffaf5, #f4eee8);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .auth-wrapper {
            width: 100%;
            max-width: 1050px;
            min-height: 620px;
            background: rgba(255, 255, 255, 0.82);
            backdrop-filter: blur(18px);
            border-radius: 34px;
            overflow: hidden;
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            box-shadow: 0 35px 80px rgba(73, 45, 24, 0.18);
        }

        .auth-left {
            background: linear-gradient(145deg, #3b2416, #a8774f);
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
            width: 320px;
            height: 320px;
            background: rgba(255,255,255,0.13);
            border-radius: 50%;
            top: -90px;
            right: -100px;
        }

        .auth-left::after {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            background: rgba(255,255,255,0.10);
            border-radius: 50%;
            bottom: -70px;
            left: -60px;
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
            font-size: 48px;
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
            padding: 70px 62px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-header {
            margin-bottom: 34px;
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

        .input-group {
            margin-bottom: 18px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 13px;
            font-weight: 600;
            color: #4a3528;
        }

        .input-group input {
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

        .input-group input:focus {
            border-color: #a8774f;
            box-shadow: 0 0 0 5px rgba(168,119,79,0.13);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 4px 0 24px;
            font-size: 13px;
            color: #75665e;
        }

        .form-options a {
            color: #8a5f3e;
            text-decoration: none;
            font-weight: 600;
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
            margin-top: 26px;
            text-align: center;
            font-size: 14px;
            color: #7b6d64;
        }

        .switch-link a {
            color: #6b4228;
            font-weight: 700;
            text-decoration: none;
        }

        @media (max-width: 850px) {
            .auth-wrapper {
                grid-template-columns: 1fr;
            }

            .auth-left {
                min-height: 330px;
                padding: 38px;
            }

            .hero-text h1 {
                font-size: 36px;
            }

            .auth-right {
                padding: 42px 30px;
            }
        }
    </style>
</head>

<body>
    <main class="auth-wrapper">
        <section class="auth-left">
            <div class="brand">RumahKerja</div>

            <div class="hero-text">
                <span>Platform Pekerja Rumah</span>
                <h1>Masuk dan temukan pekerja terpercaya.</h1>
                <p>Kelola pencarian tukang, ART, babysitter, dan jasa rumah lainnya dengan lebih mudah, cepat, dan aman.</p>
            </div>

            <div class="auth-note">© 2026 RumahKerja. Semua kebutuhan rumah, satu tempat.</div>
        </section>

        <section class="auth-right">
            <div class="form-header">
                <h2>Login</h2>
                <p>Selamat datang kembali. Masuk dulu, gas cari tukang.</p>
            </div>

            <form action="/login" method="post">
                <?= csrf_field() ?>

                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="contoh@email.com" required>
                </div>

                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Masukkan password" required>
                </div>

                <div class="form-options">
                    <label>
                        <input type="checkbox" name="remember"> Ingat saya
                    </label>
                    <a href="#">Lupa password?</a>
                </div>

                <button type="submit" class="btn-auth">Masuk Sekarang</button>
            </form>

            <div class="switch-link">
                Belum punya akun? <a href="/register">Daftar sekarang</a>
            </div>
        </section>
    </main>
</body>
</html>