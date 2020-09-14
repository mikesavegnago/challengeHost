<?php
namespace App\Lib;

use PDO;

class Database
{

    public static function StartUp()
    {
        $database = 'challenge';
        $host     = 'localhost';
        $user     = 'mike';
        $password = '1234';

        $config = "mysql:host=" . $host . ";dbname=" . $database . ";charset=utf8mb4";
        $pdo    = new PDO($config, $user, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return $pdo;
    }
}