<?php
require_once './config/config.php';
session_start();
session_destroy();
// Telegram @fletchen

if(isset($_COOKIE['series_id']) && isset($_COOKIE['remember_token'])){
	clearAuthCookie();
}
header('Location:index.php');
exit;

 ?>