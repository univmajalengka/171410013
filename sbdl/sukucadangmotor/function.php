<?php 
$conn = mysqli_connect("localhost","root","","sukucadangmotor");
function login($data)
{
	global $conn;
	if (isset($_POST["login"])) {


	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'" );

	// cek username
	if(mysqli_num_rows($result) === 1) {
		
	//cek password
	$row = mysqli_fetch_assoc($result);
	if (password_verify($password, $row["password"])) {


		// set session
		$_SESSION["username"] = $username;
		headers("Location: index.php");
		exit;
	

		}
	}
	$_SESSION["error"] = "username/password salah";

	}

	return mysqli_affected_rows($conn);
}	
 ?>