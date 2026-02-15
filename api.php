<?php
// Public API endpoint
header('Content-Type: application/json');

function getStatus() {
    return [
        'status' => 'live',
        'timestamp' => date('Y-m-d H:i:s'),
        'version' => '1.1.0',
        'deployed' => true,
        'environment' => getenv('APP_ENV') ?? 'development'
    ];
}

echo json_encode(getStatus());
?>