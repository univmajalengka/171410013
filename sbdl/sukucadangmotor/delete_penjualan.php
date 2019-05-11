
<?php
include 'connection.php';
$id = $_GET['id_penjualan'];
$sql = "DELETE FROM penjualan WHERE id_penjualan='$id'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data user dengan ID <?= $id ?>  berhasil dihapus");
		document.location.href='input_penjualan.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		document.location.href="input_penjualan.php";
	</script>
	<?php
}
?>