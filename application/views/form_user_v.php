<!DOCTYPE html>
<html>
<head>
  <title>Input Data</title>
</head>
<body>
	<form action="http://localhost/ci/index.php/user/add" method="POST">
		<table>
			<tr><td>Username</td><td> : </td><td><input name="username" type="text"></td></tr>
			<tr><td>Password</td><td> : </td><td><input name="password" type="password"></td></tr>
			<tr><td>Fullname</td><td> : </td><td><input name="fullname" type="text"></td></tr>	
			<tr><td>Level</td><td>:</td><td><select name="level">
				<option value="admin">Admin</option>
				<option value="user">User</option></select></td></tr>
			<tr><td><input name="tombol" type="submit" value="Simpan"></td></tr>
		</table>
	</form>
</body>
</html>