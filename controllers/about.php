<?php
$heading = "About";

$config = require 'config.php';
$db = new Database($config['database']);

$users = $db->query("SELECT * FROM users")->findAll();

require "./views/about.view.php";

?>