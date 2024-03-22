<!--toplevel app index -->

<?php 
require 'functions.php';
require 'router.php';



class Database {
    public function query($query) {
        //connect to my Mysql database via class as blueprint;

        // using dsn with all credentials to connect to the database
        $dsn = "mysql:host=localhost;port=3306;dbname=section_2;user=root;charset=utf8mb4";
        $pdo = new PDO($dsn);


        //query the database for all posts an run it
        $statement = $pdo->prepare($query);
        $statement->execute();

        //save all the posts in a variable and loop through them
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new Database;
$posts = $db->query("select * from posts");

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}




?>