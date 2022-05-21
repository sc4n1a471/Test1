<?php

class DatabaseController {
    private const servername = "<dbServer>";
    private const username = "<dbUser>";
    private const password = "<dbPassword>";
    private const databaseName = "<dbName>";

    // Fetching all data from table
    function getAllData($table) {

        // Creating connection
        $connection = new mysqli(
            self::servername,
            self::username,
            self::password,
            self::databaseName
        );

        // Checking connection
        if (!$connection) {
            die("Error: Connection failed: " . $connection->connect_error);
        }

        /*
         * Determine what table's data is requested
        */
        if ($table === "users") {
            $sqlCommand = "SELECT * FROM users";
        } else if ($table === "advertisements") {
            $sqlCommand = "SELECT advertisements.id, advertisements.userid, advertisements.title, users.name FROM advertisements, users WHERE advertisements.userid = users.id";
        } else {
            $sqlCommand = "Unknown table";
        }

        if ($sqlCommand !== "Unknown table") {
            $result = $connection->query($sqlCommand) or die("Error: Could not query requested data!");

//            $data = mysqli_fetch_all($result);    // this returns with normal array

            // MYSQLI_ASSOC
            // Columns are returned into the array having the fieldname as the array index.
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);    // returns an object with "id"/"name" as keys

            $result -> free_result();   // Free up result set
            $connection->close();       // Close connection

            return $data;
        } else {
            $connection->close();
            return "Error: no usable data, possibly wrong table was given";
        }
    }
}
