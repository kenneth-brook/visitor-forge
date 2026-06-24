<?php
/**
 * Visitor Forge sample configuration.
 *
 * Copy this file to config.php during installation.
 * Never commit real credentials in config.php.
 */

declare(strict_types=1);

return [
    'app' => [
        'name' => 'Visitor Forge',
        'version' => '0.1.0-dev',
        'release_channel' => 'foundation',
        'timezone' => 'America/New_York',
        'debug' => false,
    ],

    'database' => [
        'host' => 'localhost',
        'port' => 3306,
        'name' => 'visitor_forge',
        'user' => 'database_user',
        'pass' => 'database_password',
        'charset' => 'utf8mb4',
    ],

    'paths' => [
        'base_url' => '/visitor-forge',
        'upload_dir' => __DIR__ . '/../uploads',
        'media_dir' => __DIR__ . '/../uploads/media',
        'documents_dir' => __DIR__ . '/../uploads/documents',
    ],

    'security' => [
        'session_name' => 'visitor_forge_session',
        'csrf_token_name' => 'visitor_forge_csrf',
        'password_algo' => PASSWORD_DEFAULT,
        'allowed_upload_mimes' => [
            'image/jpeg',
            'image/png',
            'image/gif',
            'image/webp',
            'application/pdf',
        ],
        'max_upload_bytes' => 5242880,
    ],
];
