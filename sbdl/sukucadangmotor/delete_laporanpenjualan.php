
<?php
include 'connection.php';
$id = $_GET['tgl_laporan_penjualan'];
$sql = "DELETE FROM laporanpenjualan WHERE tgl_laporan_penjualan='$id'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data user dengan ID <?= $id ?>  berhasil dihapus");
		document.location.href='input_laporanpenjualan.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		document.location.href="input_laporanpenjualan.php";
	</script>
	<?php
}
?>