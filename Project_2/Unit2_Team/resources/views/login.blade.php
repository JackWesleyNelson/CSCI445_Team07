<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<style type="text/css">
		h1 {
			text-align: center;
		}
		.connectImg {
			width: 60%;
			margin-left: 20%;
			margin-top: 100px;
		}
		.login {
			width: 30%;
			margin-left: 35%;
		}
		form {
			width: 50%;
			margin-left: 25%;
			font-size: 25px;
		}
		.btn {
			width: 48%;
		}
		
	</style>
</head>
<body>
	<img src="img/connect.png" class="connectImg">
	<h1>Team Assignment Login</h1><br>
	<div class="login">
		<form>
			<div class="input-group">
  				<span class="input-group-addon" id="usernameLabel">Username</span>
  				<input type="text" class="form-control" id="username" aria-describedby="usernameLabel">
			</div>
			<br>
			<div class="input-group">
  				<span class="input-group-addon" id="paswordLabel">Password</span>
  				<input type="password" class="form-control" id="passsword" aria-describedby="passwordLabel">
			</div>
			<br>
			<input type="submit" value="Login" class="btn btn-primary">
			<input type="submit" value="Sign-up" class="btn btn-default">
		</form>
	</div>
</body>
</html>