<?php
require_once 'dbkoneksi.php';

// 1. Tangkap data dari form
$_kode = $_POST['kode'] ?? null;
$_nama = $_POST['nama'] ?? null;
$_tmp_lahir = $_POST['tmp_lahir'] ?? null;
$_tgl_lahir = $_POST['tgl_lahir'] ?? null;
$_gender = $_POST['gender'] ?? null;
$_email = $_POST['email'] ?? null;
$_alamat = $_POST['alamat'] ?? null;
$_kelurahan_id = $_POST['kelurahan'] ?? null;
$_proses = $_POST['proses'] ?? NULL;


    if ($_proses == "simpan") {
        $sql = "INSERT INTO pasien(kode,nama,tmp_lahir,tgl_lahir,gender,email,alamat,kelurahan_id) VALUES (?,?,?,?,?,?,?,?)";
        $ar_data = [$_kode, $_nama, $_tmp_lahir, $_tgl_lahir, $_gender, $_email, $_alamat, $_kelurahan_id];

    } elseif ($_proses == "Update") {
        $id_edit = $_POST['id_edit'] ?? NULL; //4
        $ar_data = [$_kode, $_nama, $_tmp_lahir, $_tgl_lahir, $_gender, $_email, $_alamat, $_kelurahan_id,  $id_edit];
        $sql = "UPDATE pasien SET kode=?, nama=?, tmp_lahir=?, tgl_lahir=?, gender=?, email=?, alamat=?, kelurahan_id=? WHERE id=?";

    } elseif ($_proses == "Hapus") {
        $id_hapus = $_POST['id_hapus'] ?? NULL;
        $ar_data = [$id_hapus];
        $sql = "DELETE FROM pasien WHERE id=?";

    } else {
        die("");
    }

$stmt = $dbh->prepare($sql);

$stmt->execute($ar_data);

header('location: data_pasien.php');
?>