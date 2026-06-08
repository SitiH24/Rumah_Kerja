<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RumahKerja</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --cream: #fffaf5;
            --soft-cream: #f5eee8;
            --brown: #a8774f;
            --dark-brown: #2c1a10;
            --text: #24170f;
            --muted: #7b6d64;
            --white: #ffffff;
        }

        body {
            background: linear-gradient(135deg, var(--cream), var(--soft-cream));
            color: var(--text);
        }

        .navbar {
            width: 100%;
            height: 88px;
            background: rgba(255, 255, 255, 0.88);
            backdrop-filter: blur(16px);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 72px;
            border-bottom: 1px solid #eaded4;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999;
        }

        .logo a {
            text-decoration: none;
            color: var(--dark-brown);
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text);
            font-size: 15px;
            font-weight: 600;
        }

        .btn-login {
            padding: 12px 26px;
            border: 1.5px solid #d8c9bd;
            border-radius: 999px;
            background: var(--white);
        }

        .btn-daftar {
            padding: 12px 28px;
            border-radius: 999px;
            background: linear-gradient(135deg, var(--dark-brown), var(--brown));
            color: white !important;
            box-shadow: 0 12px 28px rgba(94, 56, 28, 0.22);
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 0 22px;
                height: 76px;
            }

            .logo a {
                font-size: 22px;
            }

            .nav-links {
                gap: 10px;
            }

            .nav-links a {
                font-size: 13px;
            }

            .btn-login,
            .btn-daftar {
                padding: 9px 15px;
            }
        }
    </style>
</head>

<body>

<header class="navbar">
    <div class="logo">
        <a href="<?= base_url('/') ?>">RumahKerja</a>
    </div>

    <nav class="nav-links">
        <a href="<?= base_url('login') ?>" class="btn-login">Login</a>
        <a href="<?= base_url('register') ?>" class="btn-daftar">Daftar</a>
    </nav>
</header>