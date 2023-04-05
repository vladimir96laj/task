<?php

define("DB_SERVER","database");
define("DATA","web_data");
define("DB_USER","root");
define("DB_PASS","");
define("CHRS","utf8mb4");
define("ATTR","mysql:host=" . DB_SERVER . ";dbname=" . DATA . ";charset=" . CHRS);
define("OPTS",[
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false
]);
