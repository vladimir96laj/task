<?php

class ApiFetch {
    private string $api_url;
    
    public function __construct($api_url = "") {
        $this->api_url = $api_url;
    }

    public function get_array_from_api() : array {
        $json_data = file_get_contents($this->api_url);
        $response_data = json_decode($json_data);
        $array = [];

        foreach($response_data as $data) {
            $array[] = json_decode(json_encode($data),true);
        }

        return $array;
    }
}