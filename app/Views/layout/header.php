<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Tukang</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            background:#f8f9fb;
        }

        .navbar{
            width:100%;
            height:90px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0 80px;
            background:#fff;
            border-bottom:1px solid #e5e7eb;
            position:fixed;
            top:0;
            left:0;
            z-index:1000;
        }

        .logo{
            font-size:30px;
            font-weight:700;
            color:#111827;
            display:flex;
            align-items:center;
            gap:10px;
        }

        .logo a{
            text-decoration:none;
            color:#111827;
        }

        .nav-menu{
            list-style:none;
        }

        .nav-menu a{
            text-decoration:none;
            color:#374151;
            font-size:17px;
            font-weight:500;
            transition:.3s;
        }

        .nav-menu a:hover{
            color:#000;
        }

        .auth-button{
            display:flex;
            gap:15px;
        }

        .btn-login{
            text-decoration:none;
            padding:12px 25px;
            border:1px solid #d1d5db;
            border-radius:50px;
            color:#111827;
            font-weight:500;
            transition:.3s;
        }

        .btn-login:hover{
            background:#f3f4f6;
        }

        .btn-daftar{
            text-decoration:none;
            padding:12px 25px;
            background:#000;
            color:#fff;
            border-radius:50px;
            font-weight:600;
            transition:.3s;
        }

        .btn-daftar:hover{
            background:#1f2937;
        }

        @media(max-width:768px){

            .navbar{
                padding:0 20px;
            }

            .logo{
                font-size:22px;
            }

            .btn-login,
            .btn-daftar{
                padding:10px 15px;
                font-size:14px;
            }
        }
    </style>
</head>
<body>

<header class="navbar">

    <div class="logo">
        <a href="<?= base_url('/') ?>">
            🔨 CariTukang
        </a>
    </div>

    <nav>
        <ul class="nav-menu">
            <li>
                <a href="<?= base_url('tentang-kami') ?>">
                    Tentang Kami
                </a>
            </li>
        </ul>
    </nav>

    <div class="auth-button">
        <a href="<?= base_url('login') ?>" class="btn-login">
            Login
        </a>

        <a href="<?= base_url('register') ?>" class="btn-daftar">
            Daftar
        </a>
    </div>

</header>

</body>
</html>