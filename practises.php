<?php

//Variables
$name = "John";

//Arrays
$buisness = [
    'name' => 'Acme',
    'industry' => 'Retail',
    'location' => 'USA',
    'employees' => 200,
    'categories' => ['Retail', 'Ecommerce', 'Wholesale'],
];
$buisness['industry'];

//Associative arrays

//conditionals
if ($buisness['employees'] > 100) {
    echo 'This is a large buisness';
} else {
    echo 'This is a small buisness';
};

//Loops
foreach ($buisness['categories'] as $category) {
    echo $category;
}


//functions
function register($user) {
    echo 'User registered';
}


require "index.view.php";
include "index.view.php"



// simple classes recap
/* class Person {
    public $name;
    public $age;

    public function breathe() {
        echo $this->name . 'am breathing';
    }

    public $gender;
}

$person = new Person();
$person->name = "John";
$person->age = 30;
$person->gender = "male";


dd($person->breathe()); */
?>