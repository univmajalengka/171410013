
<?php
include 'connection.php';
$id = $_GET['id_user'];
$sql = "DELETE FROM nota_penjualan WHERE id_user='$id'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data user dengan ID <?= $id ?>  berhasil dihapus");
		document.location.href='input_notapenjualan.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		document.location.href="input_notapenjualan.php";
	</script>
	<?php
}
?>