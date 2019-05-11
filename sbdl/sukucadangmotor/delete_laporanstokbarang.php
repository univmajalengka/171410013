
<?php
include 'connection.php';
$id = $_GET['tgl_laporan'];
$sql = "DELETE FROM laporanstokbarang WHERE tgl_laporan='$id'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data user dengan ID <?= $id ?>  berhasil dihapus");
		document.location.href='input_laporanstokbarang.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		document.location.href="input_laporanstokbarang.php";
	</script>
	<?php
}
?>