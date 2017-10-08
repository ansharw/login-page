<?php
session_start();
if (!isset($_SESSION['users'])) {
	header('location: index.php');
}
