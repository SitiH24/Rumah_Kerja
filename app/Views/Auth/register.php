<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register - Rumah_Kerja</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

/* RESET */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

/* BODY */
body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#faf7f2;
}

/* CONTAINER */
.container{
    width:950px;
    height:580px;
    display:flex;
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 20px 40px rgba(0,0,0,0.1);
}

/* LEFT */
.left{
    flex:1;
    background:linear-gradient(135deg,#8B5E3C,#A67C52);
    color:white;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    padding:40px;
    text-align:center;
}

.left h1{
    font-size:32px;
    margin-bottom:10px;
}

.left p{
    font-size:14px;
    opacity:0.9;
    line-height:1.6;
}

/* RIGHT */
.right{
    flex:1;
    padding:40px;
    display:flex;
    flex-direction:column;
    justify-content:center;
}

.right h2{
    font-size:26px;
    color:#3f2d20;
    margin-bottom:20px;
}

/* INPUT */
input{
    width:100%;
    padding:13px;
    margin-bottom:12px;
    border:1px solid #ddd;
    border-radius:10px;
    outline:none;
    transition:0.3s;
}

input:focus{
    border-color:#A67C52;
}

/* BUTTON */
button{
    width:100%;
    padding:14px;
    background:#A67C52;
    border:none;
    color:white;
    border-radius:10px;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#8B5E3C;
}

/* LINK */
a{
    color:#A67C52;
    text-decoration:none;
    font-size:13px;
}

/* RESPONSIVE */
@media(max-width:768px){
    .container{
        flex-direction:column;
        width:90%;
        height:auto;
    }

    .left{
        padding:30px;
    }

    .right{
        padding:30px;
    }
}

</style>

</head>
<body>

<div class="container">

    <!-- LEFT SIDE -->
    <div class="left">
        <h1>Join Rumah_Kerja</h1>
        <p>
            Daftarkan akun Anda sekarang dan temukan pekerja rumah terpercaya dengan cepat dan mudah.
        </p>
    </div>

    <!-- RIGHT SIDE -->
    <div class="right">

        <h2>Register</h2>

        <form action="<?= base_url('register') ?>" method="post">

            <input type="text" name="nama" placeholder="Nama Lengkap">

            <input type="email" name="email" placeholder="Email">

            <input type="password" name="password" placeholder="Password">

            <input type="password" name="confirm_password" placeholder="Konfirmasi Password">

            <button type="submit">Daftar</button>

        </form>

        <p style="margin-top:12px;">
            Sudah punya akun?
            <a href="<?= base_url('login') ?>">Login sekarang</a>
        </p>

    </div>

</div>

</body>
</html>