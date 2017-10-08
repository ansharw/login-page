<?php
if (isset($_POST['login'])) {
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	$sql = "select * from users 
		where username='$username' and password='$password'";
	$rs = mysqlI_query($sql,$db_conn) or die (mysqlI_error());
	if ($row=mysqlI_fetch_assoc($rs)) {
		// simpan variable session
		$_SESSION['users']['login']=TRUE;
		$_SESSION['users']['username']=$username;
		$_SESSION['users']['password']=$password;
		// redirect ke index.php
		header('location: index.php');
	}
	else {
		// tampilkan error
		print '<center>Proses Login GAGAL</center>';
	}
}
?>

<center>
<form name="frmLogin" id="frmLogin" method="post">
<table>
	<tr>
		<th colspan="2">Login Form</th>
	</tr>
	<tr>
		<td>Username</td>
		<td><input type="text" id="username" name="username" /></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" id="password" name="password" /></td>
	</tr>
	<tr>
		<th colspan="2"><input type="submit" name="login" value="Login"></th>
	</tr>
</table>
</form>
</center>