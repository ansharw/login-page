<?php
if (isset($_POST['logout'])) {
	session_destroy();
	header('location: index.php');
}
?>

<center>
<form name="frmLogout" id="frmLogin" method="post">
<table>
	<tr>
		<th colspan="2">Keluar dari Aplikasi</th>
	</tr>
	<tr>
		<th colspan="2"><input type="submit" name="logout" value="Udah Log Out"></th>
	</tr>
</table>
</form>
</center>
