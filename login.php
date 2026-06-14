<?php
// Securely intercept incoming authentication parameters
$account_identifier = $_POST['username'] ?? '';
$security_token     = $_POST['password'] ?? '';

// Format the telemetry data cleanly
$logEntry = sprintf(
    "[%s] AUTH ENTRY - ID: %s | Token Length: %d\n",
    date('Y-m-d H:i:s'),
    $account_identifier,
    strlen($security_token)
);

// Stream directly to the environment's live console output
file_put_contents('php://stdout', $logEntry);

// Standard post-submission routing sequence
header("Location: index.html");
exit();
?>
