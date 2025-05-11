<?php
require_once "../Validacao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validacao = Validacao::validar([
        'name' =>  ['required'],
        'email' => ['required', 'email'],
        'password' => ['required', 'min:8', 'max:30', 'strong']
    ], $_POST);

    if ($validacao->naoPassou('registrar')) {
        header('Location: /login');
        exit();
    }

    $DB->query(
        query: "INSERT INTO usuarios (name, email, password) VALUES (:name, :email, :password)",
        params: [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ]
    );

    flash()->push('mensagem', "Registrado com sucesso!");
    header("location: /registrar");
    exit();
}

header("location: /registrar");
exit();
