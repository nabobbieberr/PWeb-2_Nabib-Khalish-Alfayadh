<?php
require_once 'dbkoneksi.php';

// 4. Definisi Query
$sql = "SELECT * FROM paramedik";

// 5. Eksekusi Query
$rs = $dbh->query($sql);
?>

<table border="1" width="100%">
    <tr>
        <th>Nomor</th>
        <th>Nama Paramedik</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Kategori</th>
        <th>Telephone</th>
        <th>Alamat</th>
        <th>Unit Kerja (id)</th>
    </tr>

<?php
$nomor = 1;
foreach($rs as $row){
    ?>
    <tr>
        <td><?php echo $nomor;?></td>
        <td><?php echo $row ->nama; ?></td>
        <td><?php echo $row ->gender; ?></td>
        <td><?php echo $row ->tmp_lahir; ?></td>
        <td><?php echo $row ->tgl_lahir; ?></td>
        <td><?php echo $row ->kategori; ?></td>
        <td><?php echo $row ->tlpon; ?></td>
        <td><?php echo $row ->alamat; ?></td>
        <td><?php echo $row ->unit_kerja_id; ?></td>
        <td>
           <a href="edit_paramedik.php?id=<?php echo $row->id; ?>">Ubah</a>
           <a href="hapus_paramedik.php?id=<?php echo $row->id; ?>">Hapus</a>
        </td>

    </tr>
    <?php
}

?>
</table>