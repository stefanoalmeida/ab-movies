<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $DB->query(
        query: "INSERT INTO usuarios (name, email, password) VALUES (:name, :email, :password)",
        params: [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ]
    );

    header("location: /registrar?mensagem=Registrado com sucesso");
    exit();
}
