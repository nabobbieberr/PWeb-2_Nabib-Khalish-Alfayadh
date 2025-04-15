<?php
require_once 'koneksi.php';

// 4) definisikan query
$sql = "SELECT * FROM mahasiswa order by thn_masuk desc";

// 5) jalankan query
$rs = $dbh->query($sql);

// 6) tampilkan hasil query
foreach($rs as $row){
    echo "<br>".$row->nim . '_'. $row->nama;
}
?>