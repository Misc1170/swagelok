<link rel="stylesheet" href="/public/css/style.css">
<link rel="stylesheet" href="/public/css/tailwind.css">
<?php
global $modx;
$searchQuery = $_POST['search'];
$data = [
    'task' => 'updateFilter',
    'props' => [
        'searchOnly' => ['code'],
        'search' => $searchQuery
    ]
];

$url = "http://avy.ru:575/"; // URL-адрес POST
$options = [
    'http' => [
        'method' => 'POST',
        'content' => json_encode($data)
    ]
];

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$response = json_decode($result, true);
$urlWithSlash = "http://avy.ru:575";
$resultCard = '';
foreach ($response['table']['levels'] as $items) foreach ($items as $item) {
//    var_dump($item);
//    die;
    $resultCard .= $modx->getChunk('get_search_result_table', $item);
}
return $resultCard;
//header("Location: /");
//exit();
function p($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}