<?php 
 include 'connection.php';
  $id_penjualan  = $_POST['id_penjualan']; 
  $tgl_penjualan = $_POST['tgl_penjualan'];
  $id_barang     = $_POST['id_barang'];
  $jumlah        = $_POST['jumlah'];
  $harga         = $_POST['harga'];
  $total_harga   = $_POST['total_harga'];
  $id_user       = $_POST['id_user'];

  $mysqli   = "INSERT INTO penjualan ( id_penjualan,tgl_penjualan,id_barang,jumlah,harga,total_harga,id_user) VALUES ('$id_penjualan', '$tgl_penjualan', '$id_barang', '$jumlah', '$harga','$total_harga', '$id_user')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {

    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_penjualan.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>