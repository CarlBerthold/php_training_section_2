<!--toplevel app index -->

<?php 
require 'functions.php';
require 'Database.php';
require 'router.php';

$config = require 'config.php';


$db = new Database($config['database']);
// calling the query with the mysql query
$posts = $db->query("select * from posts")->fetchAll();
//dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
?>