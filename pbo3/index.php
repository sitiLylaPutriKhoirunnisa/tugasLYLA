<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 bg-light p-5 rounded">
        <div class="header d-flex justify-content-between align-items-center">
            <h2 class="text-muted">Data Siswa</h2>
            <a class="btn btn-primary btn-sm" href="tambah.php">Tambah Data</a>
        </div>
        <ul class="list-group">
            <?php 
            include "koneksi.php";
            $koneksi = new koneksi();
            $db = $koneksi->getkoneksi();
            $query = $db->query("select * from siswa");

            while ($data = $query->fetch()) :?>
                <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                    <a href="edit.php?id=<? $data['id']; ?>">
                    <?= $data['nama']?>
                    </a>
                    <a href="proses_hapus.php?id=<?= $data['id']; ?>"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Anda yakin akan menghapus data ini ?')">Hapus</a>
                </li>
                <?php endwhile ?>
        </ul>
    </div>
    
</body>
</html>
