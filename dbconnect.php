<?php

// Define your connection string
$connectionString = "mongodb+srv://joshnamedisetty:Mongodb-123@cluster0.8y8zddn.mongodb.net/?retryWrites=true&w=majority";

// Try to establish a connection
try {
    $client = new MongoDB\Client($connectionString);

    // Select the database
    $db = $client->selectDatabase('<database-name>'); // Replace <database-name> with your actual database name
} catch (MongoDB\Driver\Exception\Exception $e) {
    // Handle connection error
    echo "Error connecting to MongoDB: " . $e->getMessage();
}

?>

