<?php
include("connection.php");
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>


<h3 align="center">Data Laporan</h3>
<div class="table-responsive">
<table class="table">
    <thead class="thead-dark">
    <tr> 
        <th scope="col">No</th>
        <th scope="col">ID_Laporan</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Username</th>
        <th scope="col">Hak Akses</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Tgl Laporan</th>
        <th scope="col">Aksi</th>
    </tr>
    </thead>

    <tbody>
<?php
    $no=1;
    $query=("SELECT * FROM view_laporan");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
<tr>
        <td><?= $no ?>.</td>
        <td><?= $r['id_laporan']; ?></td>
        <td><?= $r['nama_barang']; ?></td>
        <td><?= $r['username']; ?></td>
        <td><?= $r['hak_akses']; ?></td>
        <td><?= $r['jumlah']; ?></td>
        <td><?= $r['tgl_laporan']; ?></td>
        
        
        


        <td align="center">
           <a href="laporan_detail.php?halaman=laporan_detail&id=<?= $r['id_laporan'];?>" title="Detail Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>
            <a href="?halaman=user_edit&id=<?php echo $r['id_laporan'];?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> 
            <a href="delete_laporan.php?halaman=user_delete&id_laporan=<?php echo $r['id_laporan'];?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            
    </tr>
<?php 
$no++;
}
 ?>
</tr>
</tbody>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>