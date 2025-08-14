<?php
declare(strict_types=1);
header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: no-referrer');

$env = getenv('APP_ENV') ?: 'local';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CMP217 DevOps Practical</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h1>CMP217 DevOps Practical</h1>
  <p>Status: running (environment: <strong><?= htmlspecialchars($env, ENT_QUOTES) ?></strong>)</p>
  <p>This minimal page confirms the project structure is working.</p>
</body>
</html>
