<?php

// Detect the environment based on server variables or other conditions
$environment = 'production'; // Change this to 'local' during development

// Define configuration based on the environment
if ($environment === 'local') {
    $url = 'http://localhost:8000';
    // Other local configuration settings...
} else {
    $url = 'https://www.innovativstud.io/dev/arandor-app/';
    // Other production configuration settings...
}

return [
    'url' => $url,
    // Common settings for both environments...
];