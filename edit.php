<?php
require 'functions.php';
$id = $_GET['id'];
$siswa = query("SELECT * FROM siswa WHERE id=$id")[0];

if (isset($_POST['submit'])) {
    if (edit($_POST) > 0) {
        echo "<script>
                alert('data berhasil di Update!');
                document.location.href='index.php';
        </script>";
    } else {
        echo "<script>
                        alert('Data Gagal di Update');
                        document.location = 'edit.php';
            </script>";
    }
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

    <title>Edit Data Siswa</title>
</head>

<body>
    <?php

    ?>
    <div class="container">
        <h1 class="text-center font-weight-bold">Edit Data Siswa</h1>
        <form action="" method="POST">
            <table class="table table-borderless">
                <td><input type="hidden" name="id" value="<?= $siswa['id']; ?>"></td>
                <tr>
                    <div class="form-group">
                        <td><label for="nis">NIS</label></td>
                        <td><input type="text" name="nis" class="form-control" id="nis" value="<?= $siswa['nis']; ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="nama">Nama</label></td>
                        <td><input type="text" name="nama" class="form-control" id="nama" value="<?= $siswa['nama']; ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="alamat">Alamat</label></td>
                        <td><input type="text" name="alamat" class="form-control" id="alamat" value="<?= $siswa['alamat']; ?>"></td>
                        <td></td>
                    </div>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary" name="submit"><i class="fas fa-edit"></i> Edit</button>
                        <a href="index.php" class="btn btn-success"><i class="fas fa-backward"></i> Kembali</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>