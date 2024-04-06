<?php

namespace App\Models;

use PDO;

class Product {
    public function getData(): array {
        // setup connection details
        $dsn = "mysql:
        host=localhost;
        dbname=sherd_HenryFord;
        charset=utf8;
        port=3306";

        // create new PDO connection object with error messaging turned on
        $pdo = new PDO($dsn, "sherd_HenryFord", "4tRsQnN5", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        
        // create the db query in the PDO and assign it to a variable
        $stmt = $pdo->query("SELECT * FROM `products`");

        // run the query using the PDO connection and return the result to a variable
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>

