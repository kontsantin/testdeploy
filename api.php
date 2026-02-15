<?php
// Public API endpoint
header('Content-Type: application/json');

function getStatus() {
    return [
        'status' => 'live',
        'timestamp' => date('Y-m-d H:i:s'),
        'version' => '1.0.0'
    ];
}

echo json_encode(getStatus());
?>