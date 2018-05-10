<!DOCTYPE html>
<html>
<head>
  <title>Input Data</title>
</head>
<body>

<?php 
if (isset($user)) {
 	foreach ($user as $row) {
 		$id = $row->id;
 		$username = $row->username;
 		$password = $row->password;
 		$fullname = $row->fullname;
 		$level = $row->level;
 		$action = "http://localhost/ci/index.php/user/save_edit";
 		
 	}
 } 
 else {
 	$id = "";
 	$username = "";
 	$password = "";
 	$fullname = "";
 	$level = "";
 	$action = "http://localhost/ci/index.php/user/add";
 } 
?>

	<form action="<?php echo $action; ?>" method="POST">
	<b>Form Input Data</b>
		<table>
			<tr><td><input type="hidden" name="oldid" value="<?php echo $id; ?>"/></td></tr>
			<tr><td>Username</td><td> : </td><td><input name="username" type="text" value="<?php echo $username; ?>"/></td></tr>
			<tr><td>Password</td><td> : </td><td><input name="password" type="password" value="<?php echo $password; ?>"/></td></tr>
			<tr><td>Fullname</td><td> : </td><td><input name="fullname" type="text" value="<?php echo $fullname; ?>"/></td></tr>	
			<tr><td>Level</td><td>:</td><td><select name="level">
				<option value="admin" <?php echo $level=='admin'?'selected':'' ?> >Admin</option>
				<option value="user" <?php echo $level=='user'?'selected':'' ?> >User</option></select></td></tr>
			<tr><td><input type="submit" value="Simpan"/></td></tr>
		</table>
	</form>
</body>
