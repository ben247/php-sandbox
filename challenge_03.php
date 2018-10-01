<?php

class Bicycle {
    puplic $brand;
    puplic $model;
    puplic $year;
    puplic $description;
    puplic $weight_kg;

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