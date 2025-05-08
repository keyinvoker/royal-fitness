<?php

namespace App\Database;

use mysqli;

class MySQL
{
    public static function getDbConnection(): mysqli {
        $host = 'localhost';
        $port = '3306';
        $user = 'root';
        $password = null;
        $database = 'fitmetric';

        $conn = mysqli_connect(
            hostname: $host,
            port: $port,
            username: $user,
            password: $password,
            database: $database,
        );

        if (!$conn) {
            die("Failed to connect to DB: " . mysqli_connect_error());
        }

        return $conn;
    }
}
