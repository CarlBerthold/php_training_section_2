<!--toplevel app index -->

<?php 
require 'functions.php';
require 'Database.php';
// require 'router.php';




$db = new Database;
// calling the query with the mysql query
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);
//dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
?>