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
        
        // query the database and execute it
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        //return Databse PDO statement as Object

        return $this;
    }

    public function find() {
        return $this->statement->fetch();
    }

    public function findAll() {
        return $this->statement->fetchAll();
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