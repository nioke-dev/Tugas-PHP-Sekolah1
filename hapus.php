<?php
require 'functions.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
    alert('data berhasil Dihapus!');
    document.location.href='index.php';
</script>";
} else {
    echo "<script>
            alert('Data Gagal Dihapus!!');
            document.location = 'index.php';
</script>";
}
