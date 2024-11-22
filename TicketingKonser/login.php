<?php
$username = $_POST['username'];
$password = $_POST['password'];

$file = fopen("data_user.txt", "r");
$valid = false;

while (!feof($file)) {
    $line = trim(fgets($file));
    if($line != "") {
        list($save_username, $save_password) = explode(":", $line);
        if ($save_username == $username && $save_password == $password) {
            $valid = true;
            break;
        }    
    }
}
fclose($file);

if ($valid) {
    header('Location: beranda.html');
    exit;
} else {
    echo "<script>alert('username atau password salah')</script>";
    echo "<script>window.location='login.html'</script>";
}
?>
