<?php

class Bicycle {
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;

    function name() {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    function weight_lbs() {
        return floatval($this->weight_kg) * 2.2046226218;
    }

    function set_weight_lbs($value) {
        $this->weight_kg = floatval($value) / 2.2046226218;
    }
}

?>