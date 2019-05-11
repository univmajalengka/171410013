<?php 
 include 'connection.php';
  $id_barang         = $_POST['id_barang']; 
  $harga             = $_POST['harga'];
  $jumlah_barang     = $_POST['jumlah_barang'];
  $nama_barang       = $_POST['nama_barang'];
  $spesifikasi       = $_POST['spesifikasi'];
  $tgl_barang_masuk  = $_POST['tgl_barang_masuk'];

  $mysqli   = "INSERT INTO barang ( id_barang,harga,jumlah_barang,nama_barang,spesifikasi,tgl_barang_masuk) VALUES ('$id_barang','$harga', '$jumlah_barang', '$nama_barang','$spesifikasi','$tgl_barang_masuk')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {

    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_barang.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>