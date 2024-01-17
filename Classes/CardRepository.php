<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create(): void
    {

    }

    // Get one
    public function find(): array
    {

    }

    // Get all
    public function get(): array
    {
        // TODO: Create an SQL query
        $sqlQuery = "SELECT * FROM cards";
        // TODO: Use your database connection (see $databaseManager) and send your query to your database.
        $result = $this->databaseManager->connection->query($sqlQuery);
        // TODO: fetch your data at the end of that action.
        // TODO: replace dummy data by real one
        
        // Check if the query was succesful:
        if ($result) {
            // Fetch all the data into an array
            $cardsData = $result->fetchAll(PDO::FETCH_ASSOC); // FETCH_ASSOC fetches all the data as an associative array per default

            include "overview.php";
        } else {
            echo "Error: Query execution failed.";
        }
        return $cardsData;

        // return [
        //     ['name' => 'dummy one'],
        //     ['name' => 'dummy two'],
        // ];

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update(): void
    {

    }

    public function delete(): void
    {

    }

}