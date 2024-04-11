<?php
$config = require 'config.php';
$db = new Database($config['database']);


$heading = "";


$user = $db->query('select * from users where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

$notes = $db->query('select * from notes where user_id = :id', [
    'id' => $_GET['id']
])->findAll();


//if(!$note) {
//    abort(Response::NOT_FOUND);
//}

/* if($note['user_id'] !== $currentUser) {
 abort(Response::FORBIDDEN);
} */



require "./views/user.view.php";
?>