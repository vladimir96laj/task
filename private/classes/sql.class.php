<?php

class SqlFetch {
    static protected $database;
    private string $table_name;

    public function __construct($table_name = "") {
        $this->table_name = $table_name;
    }

    public static function set_database($database) {
        self::$database = $database;
    }

    public function get_array_from_sql() : array {
        $query = "SELECT * FROM $this->table_name";
        $result = self::$database->query($query);
        $array = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $array[] = $row;
        }

        return $array;
    }
}