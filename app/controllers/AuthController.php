<?php
require_once __DIR__ . '/../models/Usuario.php';
session_start();

class AuthController {
    private $usuarioModel;

    public function __construct() {
        $this->usuarioModel = new Usuario();
    }

    public function register($data) {
        if ($this->usuarioModel->registrar($data['nombre'], $data['correo'], $data['password'], $data['rol'])) {
            header("Location: ../views/login.php");
        } else {
            echo "Correo ya registrado.";
        }
    }

    public function login($data) {
        $usuario = $this->usuarioModel->login($data['correo'], $data['password']);
        if ($usuario) {
            $_SESSION['usuario'] = [
                'id' => (string) $usuario['_id'],
                'nombre' => $usuario['nombre'],
                'rol' => $usuario['rol']
            ];
            echo "Bienvenido " . $usuario['nombre'];
        } else {
            echo "Credenciales incorrectas";
        }
    }

    public function logout() {
        session_destroy();
        header("Location: ../views/auth/login.php");
    }
}
