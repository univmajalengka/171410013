<?php  
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "sukucadangmotor";

	$con = mysqli_connect($server,$username,$password,$database);
	
	if (! $con) {
		echo "Gagal Konek";
		mysqli_error();
	}
	else{
	}

?>

