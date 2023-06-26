<html>

<head>
	<title> Admin Page </title>
	<style>
		body {
			background-color: #036;
			margin: 0px;
			padding: 0px;
		}

		.divimage {
			width: 200px;
			height: 200px;
			margin: 20px auto 0 auto;
			background-color: #fff;
			border-radius: 50%;
		}

		.inputblock {
			width: 350px;
			height: 220px;
			background-color: #FFF;
			margin: 20px auto 0 auto;
			font-size: 20px;
			padding: 10px 20px;
			box-sizing: border-box;
			border-radius: 10px;

		}

		.input {
			width: 260px;
			height: 30px;
			font-size: 20px;
			margin: 5px auto;

		}

		.submit {
			width: 150px;
			height: 30px;
			font-size: 20px;
			background-color: #036;
			color: #FFF;

		}

		.formrow {
			width: 150px;
			height: 30px;
			margin: 5px auto;

		}
	</style>
	<link href="css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
	<div class="divimage"> <img src="images/admin.png" height="100%" width="100%" /> </div>
	<div class="inputblock">
		<form method="post" action="home.php">
			User name<br />
			<b class="fa fa-user"></b> &nbsp; &nbsp;<input type="text" name="uname" placeholder="User Name"
				class="input"><br>
			User Password<br />
			<b class="fa fa-key"></b> &nbsp; <input type="password" name="upass" placeholder="User Password"
				class="input"><br /><br>

			<div class="formrow">
				<input type="submit" name="submit" value="Login" class="submit" />
			</div>

		</form>
	</div>



</body>

</html>