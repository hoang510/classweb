<?php 
	session_start();
	$title = "Login";

	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$old_password = $_POST['old_password'];
		$password = $_POST['password'];
		$password_retype = $_POST['password_retype'];
		if (!isset($_SESSION['user']))
		{
			echo "Unknown Error";
			header("Location: /classweb/login");
		}
		if ($password !== $password_retype)
		{
			echo "Can't corfirm password";
		}
		else if (sha1($old_password) !== $_SESSION['user']['password'])
		{
			echo "Wrong password";
		}
		else
		{
			$userID = $_SESSION['user']['ID'];
			$password = sha1($password);
			include_once "../app/database/connect.php";
			$mysqlcommand = "UPDATE Members SET password = '$password' WHERE ID = $userID";
			$query = $mysql->query($mysqlcommand);
			
			$mysqlcommand = "SELECT * FROM Members WHERE ID = $userID";
			$query = $mysql->query($mysqlcommand);
			$_SESSION['user'] = $query->fetch_array(MYSQLI_ASSOC);
			$query->free_result();
			$mysql->close();
		}
	}
?>
<!DOCTYPE html>
<html>
<?php include "partials/header.php" ?>
<body>
	<?php include "partials/navbar.php" ?>
	<?php include "partials/changepassword_form.php" ?>

	<?php include "partials/footer.php" ?>
</body>
</html>