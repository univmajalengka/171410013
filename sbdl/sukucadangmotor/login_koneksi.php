<?php 
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
 
 $query = "select * from user where username='$username' and password='$password'";
$login = mysqli_query($con,$query);
$cek = mysqli_num_rows($login);
 
if($cek > 0){
  session_start();
    $_SESSION['username'] = $username;

    echo '<script>
    	alert("login sukses");
    	document.location.href="index.php";
    </script>';
    
  }else {
    echo '<script>
    	alert("login gagal");
    	document.location.href="login.php";
    </script>';
  }
?>
