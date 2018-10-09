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
    public $price;
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

// Define the __construct method

    public function __construct($args = [])
    {
        // Define the method properties
        // null coalescing operator (??)
        $this->brand = $args['brand'] ?? '';
        $this->model = $args['model'] ?? '';
        $this->year = $args['year'] ?? '';
        $this->category = $args['category'] ?? '';
        $this->colour = $args['colour'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->gender = $args['gender'] ?? '';
        $this->price = $args['price'] ?? 0;
        $this->weight_kg = $args['weight_kg'] ?? 0.0;
        $this->condition_id = $args['condition_id'] ?? 3;
    }

    public function weight_kg()
    {
        return number_format($this->weight_kg, 2) . ' kg';
    }

    public function set_weight_kg($value)
    {
        $this->weight_kg = floatval($value);
    }

    public function weight_lbs()
    {
        $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
        return number_format($weight_lbs, 2) . ' lbs';
    }

    public function set_weight_lbs($value)
    {
        $this->weight_kg = floatval($value) / 2.2046226218;
    }

    public function condition()
    {
        if ($this->condition_id > 0) { // if the condition_id is missing then set to 0
            return self::CONDITION_OPTIONS[$this->condition_id];
        } else {
            return "Unknown";
        }
    }



}

?>