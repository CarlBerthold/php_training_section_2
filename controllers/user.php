<?php
$config = require 'config.php';
$db = new Database($config['database']);


$heading = '';
//$currentUser = 2;


$user = $db->query('select * from users where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

//if(!$note) {
//    abort(Response::NOT_FOUND);
//}

/* if($note['user_id'] !== $currentUser) {
 abort(Response::FORBIDDEN);
} */



require "./views/user.view.php";
?>