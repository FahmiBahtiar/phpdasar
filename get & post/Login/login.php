
<?php

if (isset($_POST["submit"])){
	if ($_POST["username"]=="admin" && $_POST["password"]=="123"){
		header("Location: admin.php");
	}else{
		$error = true;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<?php if (isset($error)): ?>
	<p style="color: red; font-style: italic">Username/password salah!</p>
<?php endif; ?>

<h1>Login Admin</h1>
<ul>
	<form action="" method="post">
		<li>
			<label for="username">Username : </label>
			<input type="text" name="username" id="username">
		</li>
		<br>
		<li>
			<label for="password">Password : </label>
			<input type="password" name="password" id="password">
		</li>
		<br>
		<li>
			<button type="submit" name="submit">Login</button>
		</li>
	</form>
</ul>

</body>
</html>