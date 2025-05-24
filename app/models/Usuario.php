<?php
require_once __DIR__ . '/../config/database.php';

class Usuario {
    private $db_local;
    private $db_remoto;

    public function __construct() {
        $bases = Database::conectarAmbas();
        $this->db_local = $bases['local'];
        $this->db_remoto = $bases['remoto'];
    }

    public function registrar($datos) {
        $documento = [
            'nombre' => $datos['nombre'],
            'correo' => $datos['correo'],
            'password' => password_hash($datos['password'], PASSWORD_DEFAULT),
            'rol' => $datos['rol']
        ];

        // Insertar en local
        $this->db_local->usuarios->insertOne($documento);

        // Insertar en remoto
        $this->db_remoto->usuarios->insertOne($documento);
    }
}

// Uso de la clase Usuario