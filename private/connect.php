<?php

require_once 'db_credentials.php';

try {
    $pdo = new PDO(ATTR, DB_USER, DB_PASS, OPTS);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
