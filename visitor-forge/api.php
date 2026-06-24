<?php
/**
 * Visitor Forge public API placeholder.
 */

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

$response = [
    'success' => false,
    'error' => [
        'code' => 'not_installed',
        'message' => 'Visitor Forge API is not installed yet.',
    ],
    'meta' => [
        'app_name' => 'Visitor Forge',
        'app_version' => '0.1.0-dev',
        'schema_version' => null,
    ],
];

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
