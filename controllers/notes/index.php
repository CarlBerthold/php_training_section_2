<?php
$config = require 'config.php';
$db = new Database($config['database']);


$heading = "Notes";

$create = "<a href='/notes/create'>Create a Note</a>";

$note = '';

//returning all notes 
$notes = $db->query("SELECT * FROM notes")->findAll();



require "views/notes/index.view.php"
?>