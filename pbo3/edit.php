<?php
    
$id = $_GET['id'];

$db = new PDO("mysql:host=localhost;dbname=pbo12","root","");
$query = $db->query("select * from siswa WHERE id= $id");
$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card" style="width: 800px;">
        <div class="card-body">
            <form action="proses_edit.php" method="post">
                <input type="hidden" name="id" value="<?= $id?>">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input class="from-control" type="text" name="nama" value="<?= $data['nama']?>"> 
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select name="kelas" id="kelas" class="form-select">
                        <option value="1" <?= $data['kelas'] == '1' ? 'selected' : ''?>></option>
                        <option value="2" <?= $data['kelas'] == '2' ? 'selected' : ''?>></option>

                    </select>
                </div>
                <div class="d-grid gap 2">
                    <input type="submit" value="Edit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
    </div>
    
</body>
</html>