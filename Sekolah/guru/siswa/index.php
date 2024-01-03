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
    <title>CRUD Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <a href="../index.php" class="btn btn-warning mb-3">Beranda</a>
        <h2>Data Siswa</h2>
        <a href="tambah.php" class="btn btn-primary mb-3">Tambah Siswa</a>
        <a target="_blank" href="laporan.php" class="btn btn-success mb-3">
            Cetak Laporan Data Guru
        </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Umur</th>
                    <th>Gambar</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $urutan = 1 ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?= $urutan++ ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['kelas'] ?></td>
                        <td><?= $row['umur'] ?></td>
                        <td style="width: 50px;"><img src="uploads/<?= $row['gambar'] ?>" style="width: 50px;" alt=""></td>
                        </td>
                        <td><?= $row['alamat'] ?></td>
                        <td><?= $row['nomor_telepon'] ?></td>
                        <td>
                            <a href="lihat.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">lihat</a>
                            <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </div>
    
    <!-- Gunakan CDN Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>