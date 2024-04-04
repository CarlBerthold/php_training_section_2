<?php
$heading = "About";

$config = require 'config.php';
$db = new Database($config['database']);

$users = $db->query("SELECT * FROM users")->findAll();


//dd($users);

require "./views/about.view.php";
?>