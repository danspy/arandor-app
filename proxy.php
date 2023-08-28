<?php
// Check if the characterId parameter is provided
if (isset($_GET['characterId'])) {
    // Construct the URL with the provided characterId
    $characterId = $_GET['characterId'];
    $url = "https://character-service.dndbeyond.com/character/v5/character/$characterId";

    // Fetch data from the URL
    $response = file_get_contents($url);

    // Set appropriate headers
    header('Content-Type: application/json');
    echo $response;
} else {
    echo "Missing characterId parameter.";
}
