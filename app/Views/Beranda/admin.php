<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard - Rumah_Kerja</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

/* RESET */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#faf7f2;
    display:flex;
}

/* SIDEBAR */
.sidebar{
    width:260px;
    height:100vh;
    background:#8B5E3C;
    color:white;
    padding:25px;
    position:fixed;
    left:0;
    top:0;
}

.sidebar h2{
    font-size:22px;
    margin-bottom:30px;
}

.sidebar a{
    display:block;
    color:white;
    text-decoration:none;
    margin:15px 0;
    font-size:14px;
    padding:10px;
    border-radius:8px;
    transition:0.3s;
}

.sidebar a:hover{
    background:rgba(255,255,255,0.2);
}

/* MAIN CONTENT */
.main{
    margin-left:260px;
    padding:30px;
    width:100%;
}

/* HEADER */
.header{
    background:#fff;
    padding:20px;
    border-radius:15px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 10px 20px rgba(0,0,0,0.05);
    margin-bottom:25px;
}

.header h1{
    font-size:22px;
    color:#3f2d20;
}

.header span{
    color:#8B5E3C;
    font-weight:600;
}

/* CARDS */
.cards{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
}

.card{
    background:#fff;
    padding:25px;
    border-radius:15px;
    box-shadow:0 10px 20px rgba(0,0,0,0.05);
    text-align:center;
}

.card h3{
    font-size:28px;
    color:#8B5E3C;
}

.card p{
    margin-top:8px;
    color:#6d5c4d;
    font-size:14px;
}

/* TABLE */
.table{
    margin-top:30px;
    background:#fff;
    padding:20px;
    border-radius:15px;
    box-shadow:0 10px 20px rgba(0,0,0,0.05);
}

table{
    width:100%;
    border-collapse:collapse;
}

table th, table td{
    padding:12px;
    text-align:left;
    border-bottom:1px solid #eee;
    font-size:14px;
}

table th{
    color:#8B5E3C;
}

/* RESPONSIVE */
@media(max-width:900px){
    .cards{
        grid-template-columns:1fr;
    }

    .sidebar{
        width:200px;
    }

    .main{
        margin-left:200px;
    }
}

@media(max-width:600px){
    .sidebar{
        display:none;
    }

    .main{
        margin-left:0;
    }
}

</style>

</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>Admin Panel</h2>

    <a href="#">🏠 Dashboard</a>
    <a href="#">👤 Data User</a>
    <a href="#">🧰 Data Pekerja</a>
    <a href="#">📦 Pesanan</a>
    <a href="<?= base_url('logout') ?>">🚪 Logout</a>
</div>

<!-- MAIN -->
<div class="main">

    <!-- HEADER -->
    <div class="header">
        <h1>Selamat Datang, <span>Admin</span></h1>
        <p>Rumah_Kerja Dashboard</p>
    </div>

    <!-- CARDS -->
    <div class="cards">

        <div class="card">
            <h3>120</h3>
            <p>Total User</p>
        </div>

        <div class="card">
            <h3>45</h3>
            <p>Pekerja Terdaftar</p>
        </div>

        <div class="card">
            <h3>18</h3>
            <p>Pesanan Aktif</p>
        </div>

    </div>

    <!-- TABLE -->
    <div class="table">

        <h3 style="margin-bottom:15px;color:#3f2d20;">Data Terbaru</h3>

        <table>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
            </tr>

            <tr>
                <td>Budi</td>
                <td>budi@gmail.com</td>
                <td>Aktif</td>
            </tr>

            <tr>
                <td>Siti</td>
                <td>siti@gmail.com</td>
                <td>Aktif</td>
            </tr>

        </table>

    </div>

</div>

</body>
</html>