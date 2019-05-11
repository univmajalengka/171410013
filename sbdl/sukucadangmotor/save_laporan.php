<?php 
 include 'connection.php';
  $tgl_laporan   = $_POST['tgl_laporan']; 
  $jenis_laporan = $_POST['jenis_laporan'];
  $id_barang     = $_POST['id_barang'];
  $id_user       = $_POST['id_user'];
  $nama_barang   = $_POST['nama_barang'];
  $jumlah        = $_POST['jumlah'];

  $mysqli   = "INSERT INTO laporan ( tgl_laporan,jenis_laporan,id_barang,id_user,nama_barang,jumlah) VALUES ('$tgl_laporan', '$jenis_laporan', '$id_barang', '$id_user', '$nama_barang','$jumlah')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {

    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_laporan.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>