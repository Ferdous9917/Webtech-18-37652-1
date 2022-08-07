<?php
session_start();
include('../Model/conn.php');

?>
<!DOCTYPE html>
<html>

<head>
<style>
fieldset{

padding: 200px 200px;
background-image: url("login.jpg");


}

label {
  color: white;
  padding: 8px;
}

h2 {
  color: white;
  padding: 8px;
}



</style>

	<title>Login</title>
</head>

<body>
	<script src="js/login.js"></script>



	
<fieldset>
				<div style="text-align: center;">
					<h2>Login Form</h2>
					<form method="POST" name="loginForm" onsubmit="return validation()" action="loginprocess.php">

						<div>
							<label>Username:</label> <input id="username"  type="text" value="<?php if (isset($_COOKIE["username"])) {
																														echo $_COOKIE["username"];
																													} ?>" name="username"><br><br>
							<span id="usernameErr" style="color: red;"></span>
						</div>
						<diV >
							<label>Password:</label> <input id="password" type="text" value="<?php if (isset($_COOKIE["password"])) {
																														echo $_COOKIE["password"];
																													} ?>" name="password"><br><br>
							<span id="passwordErr" style="color: red;"></span>
						</div>
						<input  type="checkbox" name="remember" <?php if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
																	echo "checked";
																} ?>> Remember me <br><br>
						<div >
							<input class="text text-center" type="submit"  value="Login" name="login">
						</div>


					</form>
					<h1>Register Here <a href="signin.php">Signup</a></h1>

				</div>
</fieldset>	

	<script src="../JS/log.js"></script>
	<span>
		<?php
		if (isset($_SESSION['message'])) {
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
		?>
	</span>
</body>

</html>