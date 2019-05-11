<?php 
 include 'connection.php';
  $id              = $_POST['id_user'];
  $harga           = $_POST['harga']; 
  $tgl_beli  = $_POST['tgl_beli']; 
 
  $mysqli  = "INSERT INTO nota_penjualan (id_user, harga, tgl_beli) VALUES ('$id','$harga','$tgl_beli')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {

    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_notapenjualan.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>