<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

include '../koneksi.php';

$result = $koneksi->query("SELECT * FROM siswa ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('sekolah.png'); /* Ganti dengan URL gambar Anda */
            background-size: 50%; /* Mengurangi ukuran background menjadi 50% */
            background-position: center;
            background-repeat: no-repeat;
            color: black; /* Ganti warna teks jika perlu */
            height: 100vh; /* Menetapkan tinggi 100% dari viewport */
            margin: 0; /* Menghapus margin default */
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h2>Dashboard <span><a href="logout.php" class="btn btn-danger">Logout</a></span></h2>


        <div class="row">
    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Data Siswa</h5>
                <p class="card-text">Lihat dan kelola data siswa.</p>
                <a href="siswa/index.php" class="btn btn-primary">Lihat Data Siswa</a>
            </div>
        </div>
    </div>

        <div class="row">
    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Data Guru</h5>
                <p class="card-text">Lihat dan kelola data guru.</p>
                <a href="guru/index.php" class="btn btn-primary">Lihat Data Guru</a>
            </div>
        </div>
    </div>
</div>

    <!-- Gunakan CDN Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>