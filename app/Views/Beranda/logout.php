<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Logout - RumahKerja</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #faf7f2;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .logout-container {
        background: #fff;
        padding: 50px 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        text-align: center;
        max-width: 400px;
    }

    .logout-container h1 {
        color: #3f2d20;
        margin-bottom: 20px;
    }

    .logout-container p {
        color: #6d5c4d;
        margin-bottom: 30px;
    }

    .logout-container a.btn {
        display: inline-block;
        padding: 12px 25px;
        background: #A67C52;
        color: #fff;
        text-decoration: none;
        border-radius: 30px;
        font-weight: 500;
        transition: 0.3s;
    }

    .logout-container a.btn:hover {
        background: #8B5E3C;
    }
</style>
</head>
<body>

<div class="logout-container">
    <h1>Berhasil Logout!</h1>
    <p>Anda telah keluar dari akun RumahKerja. Terima kasih telah menggunakan layanan kami.</p>
    <a href="<?= base_url('login') ?>" class="btn">Login Kembali</a>
</div>

</body>
</html>