<?php
//Database Instance
class Database {



    public $connection;
    public $statement;
    //runs immediately when the class is called to set a new PDO connection

    public function __construct($config, $username = 'root', $password= '') {
    // PDO instance ass connection Instance property using options paramater as config for dsn
    $dsn = 'mysql:' . http_build_query($config, '', ';');
    //$dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
    $this->connection = new PDO($dsn, $username, $password, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    }
    public function query($query, $params = []) {
        
        //query the database with the query and execute it with it
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        //save all the posts in a variable and loop through them
        return $this;
    }

    public function find() {
        return $this->statement->fetch();
    }

    public function findOrFail(){

        $result = $this->find();

        if( !$result) {
           abort();
        }

        return $result;
    }

}
?>