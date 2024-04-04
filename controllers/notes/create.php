<?php
$config = require 'config.php';
$db = new Database($config['database']);
$heading = "Create a Note";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    

    
    $db->query("INSERT INTO notes (content, user_id) VALUES (:content, :user_id)", [
        "content" => $_POST["content"],
        "user_id" => 1
    ]);
    header("Location: /notes");
}

require "./views/noteCreate.view.php";

?>