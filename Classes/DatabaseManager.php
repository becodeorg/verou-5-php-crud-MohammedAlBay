<?php

// This class will manage the connection to the database
// It will be passed on the other classes who need it
class DatabaseManager
{
    // These are private: only this class needs them
    private string $host;
    private string $user;
    private string $password;
    private string $dbname;
    // This one is public, so we can use it outside of this class
    // We could also use a private variable and a getter (but let's not make things too complicated at this point)
    public PDO $connection;

    public function __construct(string $host, string $user, string $password, string $dbname)
    {
        // TODO: Set any user and password information
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    public function connect(): void
    {
        // TODO: make the connection to the database
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname"; // this can be merged with the other parameters below instead of assigning to $dsn first
            $this->connection = new PDO($dsn, $this->user, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // setting the error mode to handle exceptions and errors to be able to catch them
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // setting the fetch mode to "associative arrays"

            echo "Connection succesful!";
        } catch (PDOException $error) {
            echo "Connection failed: " . $error->getMessage();
        }
    }
}