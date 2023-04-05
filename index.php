<?php
require_once 'private/init.php';

$sqlFetch = new SqlFetch('data');

$array1 = $sqlFetch->get_array_from_sql();
var_dump($array1);

echo "<hr>";

$csvFetch = new CsvFetch('data.csv');

$array2 = $csvFetch->get_array_from_csv();
var_dump($array2);

echo "<hr>";

$apiFetch = new ApiFetch('https://raw.githubusercontent.com/vladimir96laj/task/main/data.json');

$array3 = $apiFetch->get_array_from_api();
var_dump($array3);

echo "<hr>";

$createApi = new Response([$array1,$array2,$array3,]);
$createApi->create_api();