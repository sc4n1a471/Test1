<?php

function console_log($data) {
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}

class DatabaseConnection {
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
            console_log($connection->connect_error);
            die("Connection failed: " . $connection->connect_error);
        }

        console_log("Succesfully connected!");


        if ($table === "users") {
            $sqlCommand = "SELECT * FROM users";
        } else if ($table === "advertisements") {
            $sqlCommand = "SELECT advertisements.id, advertisements.userid, advertisements.title, users.name FROM advertisements, users";
        } else {
            $sqlCommand = "Unknown table";
            console_log("This table does not exist");
        }

        if ($sqlCommand !== "Unknown table") {
            $result = $connection->query($sqlCommand);

//            while ($row = $result->fetch_assoc()) {
//                console_log($row["id"]);
//            }


        }

    }
}
