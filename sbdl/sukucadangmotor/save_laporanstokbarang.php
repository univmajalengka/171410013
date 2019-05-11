<?php 
 include 'connection.php';
  $laporanstokbarang  = $_POST['tgl_laporan']; 
 
  $mysqli  = "INSERT INTO laporanstokbarang (tgl_laporan) VALUES ('$laporanstokbarang')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {
    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_laporanstokbarang.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>