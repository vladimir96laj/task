<?php
require_once 'private/init.php';

$sqlFetch = new SqlFetch('data');

var_dump($sqlFetch->get_array_from_sql());

echo "<hr>";

$csvFetch = new CsvFetch('data.csv');

var_dump($csvFetch->get_array_from_csv());