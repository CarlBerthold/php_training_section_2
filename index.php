<!--toplevel app index -->

<?php 
require 'functions.php';
require 'router.php';


//Database Instance
class Database {

    public $connection;
    //runs immediately when the class is called to set a new PDO connection

    public function __construct() {
        // PDO instance ass connection Instance property 
        $dsn = "mysql:host=localhost;port=3306;dbname=section_2;user=root;charset=utf8mb4";
        $this->connection = new PDO($dsn);

    }
    public function query($query) {
        
        //query the database for all posts an run it
        $statement = $this->connection->prepare($query);
        $statement->execute();

        //save all the posts in a variable and loop through them
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new Database;
// calling the query with the mysql query
$posts = $db->query("select * from posts");

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
?>