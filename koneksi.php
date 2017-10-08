<?php
$db_conn = mysqli_connect($db_host.':'.$db_port,$db_user,$db_pass);
if (!$db_conn) die('Koneksi Database GAGAL: ' . mysqli_error());

$db_active = mysqli_select_db($db_name, $db_conn);
if (!$db_active) die ('Pengaktifan Database "'.$db_name.'" GAGAL: ' . mysqli_error());

