<?php
$s = $_GET['s'] ?? null;

$url = "https://www.jiosaavn.com/api.php?__call=webapi.get&token=k9vmRs04uDg_&type=label&p=&n_song=10&n_album=14&category=alphabetical&sort_order=asc&language=&includeMetaTags=0&ctx=wap6dot0&api_version=4&_format=json&_marker=0";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Adding headers
$headers = [
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36',
    'Accept: application/json',
    'Connection: keep-alive',
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

header('Content-Type: application/json');
echo json_encode($data, JSON_UNESCAPED_SLASHES);
?>
