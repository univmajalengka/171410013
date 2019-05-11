
<?php
include 'connection.php';
$id = $_GET['id_barang'];
$sql = "DELETE FROM barang WHERE id_barang='$id'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data user dengan ID <?= $id ?>  berhasil dihapus");
		document.location.href='input_barang.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		document.location.href="input_barang.php";
	</script>
	<?php
}
?>