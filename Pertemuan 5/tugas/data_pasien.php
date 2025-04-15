<?php
require_once 'dbkoneksi.php';

// 4. Definisi Query
$sql = "SELECT * FROM pasien";

// 5. Eksekusi Query
$rs = $dbh->query($sql);
?>

<table border="1" width="100%">
    <tr>
        <th>nomor</th>
        <th>kode</th>
        <th>nama pasien</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Kelurahan</th>
    </tr>

<?php
$nomor = 1;
foreach($rs as $row){
    ?>
    <tr>
        <td><?php echo $nomor;?></td>
        <td><?php echo $row ->kode; ?></td>
        <td><?php echo $row ->nama; ?></td>
        <td><?php echo $row ->tmp_lahir; ?></td>
        <td><?php echo $row ->tgl_lahir; ?></td>
        <td><?php echo $row ->gender; ?></td>
        <td><?php echo $row ->email; ?></td>
        <td><?php echo $row ->alamat; ?></td>
        <td><?php echo $row ->kelurahan_id; ?></td>
        <td>
           <a href="edit_pasien.php?id=<?php echo $row->id; ?>">Ubah</a>
           <a href="hapus_pasien.php?id=<?php echo $row->id; ?>">Hapus</a>
        </td>

    </tr>
    <?php
}

?>
</table>