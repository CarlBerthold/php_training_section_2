<?php
//Database Instance
class Database {

    public $connection;
    //runs immediately when the class is called to set a new PDO connection

    public function __construct($config, $username = 'root', $password= '') {
    // PDO instance ass connection Instance property using options paramater as config for dsn
    $dsn = 'mysql:' . http_build_query($config, '', ';');
    //$dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
    $this->connection = new PDO($dsn, $username, $password, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    }
    public function query($query) {
        
        //query the database for all posts an run it
        $statement = $this->connection->prepare($query);
        $statement->execute();

        //save all the posts in a variable and loop through them
        return $statement;
    }
}
?>