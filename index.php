<?php
include_once 'assets/controller/method.php';
if (isset($_POST['signup_btn'])) {
	// $username = $_POST['username'];
	$data = $_POST['frm'];
	signup($data);
}


?>




<!DOCTYPE html>
<html>

<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
 	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);        ?>">
				<label for="chk" aria-hidden="true">Sign up</label>
				<!-- the submit -->
				<input type="text" name="frm[username]" placeholder="User name" required="">
				<input type="email" name="frm[email]" placeholder="Email" required="">
				<input type="password" name="frm[password]" placeholder="Password" required="">
				<input type="password" name="frm[passwordConfirm]" placeholder="Password confirm" required="">
				<input type="submit" value="Signup" name="signup_btn" />
			</form>
		</div>

		<div class="login">
			<form>
				<label for="chk" aria-hidden="true">Login</label>
				<input type="email" name="email" placeholder="Email" required="">
				<input type="password" name="pswd" placeholder="Password" required="">
				<button>sign</button>
			</form>
		</div>
	</div>
</body>

</html>