<!--toplevel app index -->

<?php 
require 'functions.php';
require 'router.php';


//connect to my Mysql database via class as blueprint;

// using dsn with all credentials to connect to the database
$dsn = "mysql:host=localhost;port=3306;dbname=section_2;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);


//query the database for all posts an run it
$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

//save all the posts in a variable and loop through them
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}


/* class Person {
    public $name;
    public $age;

    public function breathe() {
        echo $this->name . 'am breathing';
    }

    public $gender;
}

$person = new Person();
$person->name = "John";
$person->age = 30;
$person->gender = "male";


dd($person->breathe()); */

?>