<?php

class Bicycle {
    public $brand;
    public $model;
    public $year;
    public $description;
    public $weight_kg;

    public function name() {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    public function weight_lbs() {
        return floatval($this->weight_kg) * 2.2046226218;
    }

    public function set_weight_lbs($value) {
        $this->weight_kg = floatval($value) / 2.2046226218;
    }
}

?>