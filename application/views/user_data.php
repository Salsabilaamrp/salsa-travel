<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
	<style>
	.sansserif {
    font-family: Arial, Helvetica, sans-serif;
}
#user {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 30%;
}

#user td, #user th {
    border: 1px solid #ddd;
    padding: 8px;
}

#user tr:nth-child(even){background-color: #f2f2f2;}

#user tr:hover {background-color: #ddd;}

#user th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #f4511e;
    color: white;
}
</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<table id="user" border=1>
	<tr>
		<th>No.</th>
		<th>Username</th>
		<th>Password</th>
		<th>Level</th>
		<th>Aksi</th>
	</tr>
	
<a href="http://localhost/ci/index.php/user/form"><p class="sansserif">Input Data</p></a><br/>
	<?php 
	
	$nomor = 1;
		foreach ($user as $row) {
			?>

		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $row->username?></td>
			<td><?php echo $row->password?></td>
			<td><?php echo $row->level?></td>
			<td>
				<a href="<?php echo base_url() . "index.php/User/del/" . $row->id; ?>">Hapus</a> | 
				<a href="<?php echo base_url() . "index.php/User/edit/" . $row->id; ?>">Edit</a>
			</td>
		</tr>
	<?php
		}
	 ?>
</table>
</body>
</html>