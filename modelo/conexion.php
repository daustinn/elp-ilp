<?php
/**
 * Establishes a connection to the MySQL database.
 *
 * @return mysqli|false MySQLi connection object or false in case of error.
 */


function connectToDatabase()
{
     $host = 'localhost';
     $port = '3306';
     $username = 'root';
     $password = '';
     $database = 'elp-db';

     try {
          $connection = new mysqli($host . ':' . $port, $username, $password, $database);
          $connection->set_charset("utf8");
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