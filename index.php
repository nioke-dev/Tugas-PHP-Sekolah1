<?php

require 'functions.php';

$siswa = query("select * from siswa");

if (isset($_POST['cari'])) {
    $siswa = cari($_POST['keyword']);
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- link fontawesome -->
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">


    <title>Halaman Admin</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center font-weight-bold" style="font-family: Arial, Helvetica, sans-serif;">Daftar Siswa</h1>
        <form action="" method="POST" class="form-inline my-2 my-lg-0">
            <a href="tambah.php" class="btn btn-warning shadow mb-2"><i class="fas fa-plus-circle"></i> Tambah Data Siswa</a>
            <input type="text" class="form-control mr-sm-2 ml-auto" name="keyword" autofocus placeholder="Search">
            <input type="submit" value="Search" name="cari" class="btn btn-outline-success">
        </form>
        <table class="table table-striped">
            <tr>
                <th>No.</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($siswa as $s) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $s['nis']; ?></td>
                    <td><?= $s['nama']; ?></td>
                    <td><?= $s['alamat']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $s['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>

                        <!-- Button trigger modal -->
                        <a href="hapus.php?id=<?= $s['id']; ?>" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash"></i> delete</a>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda Yakin ingin Menghapus Data ini...?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <a href="hapus.php?id=<?= $s['id']; ?>" class="btn btn-danger">
                                            Hapus
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </table>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>