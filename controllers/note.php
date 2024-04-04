<?php
$config = require 'config.php';
$db = new Database($config['database']);


$heading = "My Note";
//$currentUser = 2;


$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

//if(!$note) {
//    abort(Response::NOT_FOUND);
//}

/* if($note['user_id'] !== $currentUser) {
 abort(Response::FORBIDDEN);
} */



require "./views/note.view.php";
?>