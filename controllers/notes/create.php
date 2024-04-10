<?php

// requirering php file
require 'Validator.php';

//requireing function from validator php
//require('Validator.php');

$config = require 'config.php';
$db = new Database($config['database']);
$heading = "Create a Note";
 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];

    $validator = new Validator();


    if($validator->string($_POST['content'])) {
        $errors['content'] = "Content is required";
    }

    if(strlen($_POST['content']) > 1000) {
        $errors['content'] = "Content is too long";
    }



    if(empty($errors)) {
        $db->query("INSERT INTO notes (content, user_id) VALUES (:content, :user_id)", [
            "content" => $_POST["content"],
            "user_id" => 1
        ]);
        header("Location: /notes");
    }
}

require "./views/noteCreate.view.php";

?>