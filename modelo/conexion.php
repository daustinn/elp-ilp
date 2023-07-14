<?php
/**
 * Establishes a connection to the MySQL database.
 *
 * @return mysqli|false MySQLi connection object or false in case of error.
 */


function connectToDatabase()
{
     $host = 'containers-us-west-108.railway.app';
     $port = '6636';
     $username = 'root';
     $password = '81YTQQn9iz4OkZxOKRbU';
     $database = 'railway';

     try {
          $connection = new mysqli($host . ':' . $port, $username, $password, $database);
          $connection->set_charset("utf8mb4");
          return $connection;
     } catch (mysqli_sql_exception $e) {
          echo "Error connecting to the database: " . $e->getMessage();
          return false;
     }
}

// Usage example:
$connection = connectToDatabase();
if ($connection) {
     // Connection was successful, you can execute queries here
     // ...
     $connection->close(); // Close the connection when no longer needed
}