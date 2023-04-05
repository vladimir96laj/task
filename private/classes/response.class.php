<?php

class Response {
    private $arr = [];
    public function __construct($arr = []) {
        $this->arr = $arr;
    }

    public function create_api() : void {
        $join_arrays = [];
        $arrays = [];
        $sum_time_on_site = 0;
        foreach($this->arr as $array_child) {
            foreach($array_child as $data) {
                $arrays[] = $data;
                $sum_time_on_site += $data['time_on_site'];
            }
        }

        $count = count($arrays);
        $average_time = $sum_time_on_site / $count;
        if($sum_time_on_site > 0 && $count > 0) {
        $count = count($arrays);
            $join_arrays = ["error" => false, "message" => "JSON created successfully!", "data"=>["Visit count"=>$count, "Total time spent"=>$sum_time_on_site,'Average time spent'=>$average_time],"Raw data" => $arrays];
        } else {
            $join_arrays = ["error" => true, "message" => "JSON failed!!!"];
        }

        $json = json_encode($join_arrays);
        file_put_contents('API.json', $json);
    }
}