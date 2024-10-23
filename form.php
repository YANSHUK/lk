<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $name = $_POST['your-name'];
    $email = $_POST['your-email'];
    $password = $_POST['your-password'];


    $message = 'Регистрация успешна! Данные: ' . json_encode($_POST);


    $response = ['status' => 'success', 'message' => $message];
    echo json_encode($response);

} else {
    echo "что?";
}
