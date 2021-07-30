<?php
//koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "sekolah");

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data)
{
    global $koneksi;
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "INSERT INTO siswa VALUES('','$nis','$nama','$alamat')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}
function edit($data)
{
    global $koneksi;

    $id = $data['id'];
    $nis = htmlspecialchars($data['nis']);
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);

    $query = "UPDATE siswa SET
                nis = '$nis',
                nama = '$nama',
                alamat = '$alamat'
            WHERE id=$id
            ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
function cari($keyword)
{
    global $koneksi;
    $query = "SELECT * FROM siswa WHERE
                nis LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                alamat LIKE '$keyword%'
                ";
    return query($query);
}
