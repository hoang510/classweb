<?php 
	session_start();
	$title = "Login";

	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		include_once "../app/database/connect.php";
		$mysqlcommand = "SELECT * FROM Members WHERE username = '$username' AND password = '".sha1($password)."'";
		$query = $mysql->query($mysqlcommand);
		if ($query->num_rows > 0)
		{
			$_SESSION['user'] = $query->fetch_array(MYSQLI_ASSOC);
			$query->free_result();
		}	
		else {
			echo "Not Found username/password";
		}

		$mysql->close();
	}

	if (isset($_SESSION['user']))
	{
		header("Location: /classweb");
	}
	
?>
<!DOCTYPE html>
<html>
<?php include "partials/header.php" ?>
<body>
	<?php include "partials/navbar.php" ?>
	<?php include "partials/login_form.php" ?>

	<?php include "partials/footer.php" ?>
</body>
</html>