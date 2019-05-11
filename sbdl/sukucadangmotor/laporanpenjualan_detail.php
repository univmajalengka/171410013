<?php
include("connection.php");
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<h3 align="center">Detail Laporan Penjualan</h3>
<div class="table-responsive">
<table class="table">
    <thead class="thead-dark">
    <tr>
           <th scope="col">No</th>
           <th scope="col">Tgl Laporan Penjualan</th>
       
               
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM laporanpenjualan WHERE tgl_laporan_penjualan='$_GET[id]'");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo $no;?>.</td>
        <td><?php echo $r['tgl_laporan_penjualan'];?></td>

         <td align="center"> 
            <a  href= "delete_user.php?halaman=user_delete&id_user=<?= $r['id_user'];?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        </td>

    
    </tr>
<?php 
$no++;
} ?>
</tr>
</tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
<a href="input_laporanpenjualan.php?halaman=user" class="btn btn-sm btn-primary">Kembali</a>