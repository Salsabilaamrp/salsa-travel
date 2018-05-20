<!DOCTYPE html>
<html>
<head>
  <title>Input Data</title>
  <style>
  .sansserif {
    font-family: Arial, Helvetica, sans-serif;
}
	* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

input[type=password] {
	width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}


.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #20B2AA;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 12px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.button {
    position: relative;
    background-color: #20B2AA;
    border: none;
    font-size: 15px;
    color: #FFFFFF;
    padding: 12px;
    width: 100px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

.button:after {
    content: "";
    background: #f1f1f1;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px !important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}

</style>
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
	<p class="sansserif">Form Input Data</p>
		<table>
			<tr><td><input type="hidden" name="oldid" value="<?php echo $id; ?>"/></td></tr>
			<tr><td>Username</td><td> : </td><td><input name="username" placeholder="Your username.. " type="text" value="<?php echo $username; ?>"/></td></tr>
			<tr><td>Password</td><td> : </td><td><input name="password" placeholder="Your password.. " type="password" value="<?php echo $password; ?>"/></td></tr>
			<tr><td>Fullname</td><td> : </td><td><input name="fullname" placeholder="Your fullname.. " type="text" value="<?php echo $fullname; ?>"/></td></tr>	
			<tr><td>Level</td><td>:</td><td><select name="level">
				<option value="admin" <?php echo $level=='admin'?'selected':'' ?> >Admin</option>
				<option value="user" <?php echo $level=='user'?'selected':'' ?> >User</option></select></td></tr>
			<tr><td><button type="submit" class="button" style="vertical-align:middle"><span>Simpan </span></button></td></tr>

		</table>
  </form>
</div>
</body>
