<?php
require_once __DIR__ . '/../vendor/autoload.php';

use MongoDB\Client;

class Database {
    private static $local = null;
    private static $remoto = null;

    public static function conectarAmbas() {
        if (self::$local === null) {
            try {
                self::$local = new Client("mongodb://localhost:27017");
            } catch (Exception $e) {
                die("Error conectando a MongoDB LOCAL: " . $e->getMessage());
            }
        }

        if (self::$remoto === null) {
            try {
                self::$remoto = new Client("mongodb+srv://diego:diegocm12@mumai.znag1sq.mongodb.net/");
            } catch (Exception $e) {
                die("Error conectando a MongoDB REMOTO: " . $e->getMessage());
            }
        }

        return [
            'local' => self::$local->selectDatabase("mumai"),
            'remoto' => self::$remoto->selectDatabase("mumai")
        ];
    }
}
