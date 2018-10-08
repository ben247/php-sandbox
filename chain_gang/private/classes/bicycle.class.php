<?php

// Define the class
class Bicycle
{
// Define class proporties
    public $brand;
    public $model;
    public $year;
    public $category;
    public $colour;
    public $description;
    public $gender;
    protected $weight_kg;
    protected $condition_id;
// Define the class constants
    public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

    public const GENDERS = ['Mens', 'Womens', 'Unisex'];

    protected const CONDITION_OPTIONS = [
        1 => 'Beat up',
        2 => 'Decent',
        3 => 'Good',
        4 => 'Great',
        5 => 'Like New'
    ];



}

?>