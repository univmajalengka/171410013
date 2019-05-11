<?php 
 include 'connection.php';
  $laporanpenjualan  = $_POST['tgl_laporan_penjualan']; 
 
  $mysqli  = "INSERT INTO laporanpenjualan (tgl_laporan_penjualan) VALUES ('$laporanpenjualan')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {

    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_laporanpenjualan.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>