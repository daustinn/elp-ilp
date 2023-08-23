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
<<<<<<< HEAD
     $password = 'root';
=======
     $password = '';
<<<<<<< HEAD
=======
<<<<<<< HEAD
     $database = 'elp-ilp';
=======
>>>>>>> 49b3d372ca7ec17241774f21d689cf52cbba9d3e
>>>>>>> ba7b3329517c2edc8bebf8633c00b9d60fd6822f
     $database = 'elp_db';

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
