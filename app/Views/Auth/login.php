<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Rumah_Kerja</title>

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
    width:900px;
    height:520px;
    display:flex;
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 20px 40px rgba(0,0,0,0.1);
}

/* LEFT SIDE */
.left{
    flex:1;
    background:linear-gradient(135deg,#A67C52,#8B5E3C);
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

/* RIGHT SIDE */
.right{
    flex:1;
    display:flex;
    flex-direction:column;
    justify-content:center;
    padding:50px;
}

.right h2{
    font-size:28px;
    color:#3f2d20;
    margin-bottom:20px;
}

/* INPUT */
input{
    width:100%;
    padding:14px;
    margin-bottom:15px;
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

    <!-- LEFT -->
    <div class="left">
        <h1>Rumah_Kerja</h1>
        <p>
            Platform pencarian pekerja rumah terpercaya<br>
            Temukan ART, tukang, babysitter dengan mudah dan cepat
        </p>
    </div>

    <!-- RIGHT -->
    <div class="right">

        <h2>Login</h2>

        <form action="<?= base_url('login') ?>" method="post">

            <input type="email" name="email" placeholder="Masukkan Email">

            <input type="password" name="password" placeholder="Masukkan Password">

            <button type="submit">Masuk</button>

        </form>

        <p style="margin-top:12px;">
            Belum punya akun?
            <a href="<?= base_url('register') ?>">Daftar sekarang</a>
        </p>

    </div>

</div>

</body>
</html>