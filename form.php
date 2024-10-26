<?php

require 'db.php';
require 'lib/User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['your-name']);
    $email = trim($_POST['your-email']);
    $passwordInput = $_POST['your-password'];

    if (empty($email) || empty($passwordInput)) {
        $message = 'Заполните обязательные поля';
        $response = [
            'status' => 'error',
            'message' => $message,
        ];
        echo json_encode($response);
        exit;
    }

    $user = new User($name, $email, $passwordInput, $pdo);

    //$response = User::delete($pdo, $identifier);

    $response = $user->register();

    echo json_encode($response);

} else {
    echo json_encode(['status' => 'error', 'message' => 'Неверный метод запроса.']);
}
