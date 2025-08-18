<?php
header('Content-Type: application/json');

if (!isset($_GET['domain']) || empty($_GET['domain'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Domain is required.']);
    exit;
}

$domain = urlencode($_GET['domain']);
$whois_url = "http://whoisServer:3000/?domain=$domain";

// Use file_get_contents to fetch from whoisServer
$response = @file_get_contents($whois_url);

if ($response === FALSE) {
    http_response_code(502);
    echo json_encode(['error' => 'Failed to fetch from whoisServer.']);
    exit;
}

echo $response;