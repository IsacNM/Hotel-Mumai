<?php
require_once '../controllers/AuthController.php';

$auth = new AuthController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_GET['action'] ?? '';

    if ($action === 'register') {
        $auth->register($_POST);
    } elseif ($action === 'login') {
        $auth->login($_POST);
    }
}
