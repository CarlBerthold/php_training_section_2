<?php
$config = require 'config.php';
$db = new Database($config['database']);


$heading = "My Notes";

//returning all notes 
$notes = $db->query("SELECT * FROM notes")->findAll();



//dd($notes);



require "./views/notes.view.php";
?>