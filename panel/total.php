<?php

if(!empty($_GET['data'])){$data = $_GET['data'];};

$file = $data.'/total.lib.js';
// Telegram @fletchen
$content = file_get_contents($file);
echo $content;


?>