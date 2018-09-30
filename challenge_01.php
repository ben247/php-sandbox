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

$bicycle1 = new Bicycle;
$bicycle1->brand = 'Nukeproof';
$bicycle1->model = 'Mega';
$bicycle1->year = '2018';
$bicycle1->weight_kg = 1.0;

$bicycle2 = new Bicycle;
$bicycle2->brand = 'Cube';
$bicycle2->model = 'Gyro';
$bicycle2->weight_kg = 2.0;
$bicycle2->year = '2017';

echo $bicycle1->name() . "<br />";
echo $bicycle2->name() . "<br />";

echo $bicycle2->weight_kg . "<br />";
echo $bicycle2->weight_lbs() . "<br />";

$bicycle1->weight_lbs(2);
echo $bicycle2->weight_kg . "<br />";
echo $bicycle2->weight_lbs() . "<br />";

?>