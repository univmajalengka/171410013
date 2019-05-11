<?php 
 include 'connection.php';
  $id  = $_POST['id_user']; 
  $hak  = $_POST['hak_akses'];
  $pass  = $_POST['password'];
  $user  = $_POST['username'];
  $mysqli  = "INSERT INTO user (id_user,hak_akses,password,username) VALUES ('$id', '$hak', '$pass', '$user')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {

    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_user.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>