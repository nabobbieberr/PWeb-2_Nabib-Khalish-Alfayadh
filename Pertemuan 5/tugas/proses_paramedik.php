<?php
require_once 'dbkoneksi.php';

// 1. Tangkap data dari form
$_nama = $_POST['nama'] ?? null;
$_gender = $_POST['gender'] ?? null;
$_tmp_lahir = $_POST['tmp_lahir'] ?? null;
$_tgl_lahir = $_POST['tgl_lahir'] ?? null;
$_kategori = $_POST['kategori'] ?? null;
$_tlpon = $_POST['tlpon'] ?? null;
$_alamat = $_POST['alamat'] ?? null;
$_unit_kerja_id = $_POST['unit_kerja_id'] ?? null;
$_proses = $_POST['proses'] ?? NULL;

    if ($_proses == "simpan") {
        $sql = "INSERT INTO paramedik(nama,gender,tmp_lahir,tgl_lahir,kategori,tlpon,alamat,unit_kerja_id) VALUES (?,?,?,?,?,?,?,?)";
        $ar_data = [$_nama, $_gender, $_tmp_lahir, $_tgl_lahir, $_kategori, $_tlpon, $_alamat, $_unit_kerja_id];

    } elseif ($_proses == "Update") {
        $id_edit = $_POST['id_edit'] ?? NULL; //4
        $ar_data = [$_nama, $_gender, $_tmp_lahir, $_tgl_lahir, $_kategori, $_tlpon, $_alamat, $_unit_kerja_id, $id_edit];
        $sql = "UPDATE paramedik SET nama=?, gender=?, tmp_lahir=?, tgl_lahir=?, kategori=?, tlpon=?, alamat=?, unit_kerja_id=? WHERE id=?";

    } elseif ($_proses == "Hapus") {
        $id_hapus = $_POST['id_hapus'] ?? NULL;
        $ar_data = [$id_hapus];
        $sql = "DELETE FROM paramedik WHERE id=?";

    } else {
        die("");
    }


$stmt = $dbh->prepare($sql);

$stmt->execute($ar_data);

header('location: data_paramedik.php');
?>