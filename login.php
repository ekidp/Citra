<html>
<head>
	<title>form login</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>
	<form action="proseslogin.php" method="post" name="form1">
		<table>
			<tr id="header">
				<td colspan="2"><h2>Login</h2></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" id="username" placeholder="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" id="password" placeholder="password"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Login">
					<input type="reset" name="Reset" value="Reset"></td>
			</tr>
		</table>

	</form>

</body>
</html>