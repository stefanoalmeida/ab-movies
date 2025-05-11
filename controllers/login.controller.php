<?php
require_once "../Validacao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $validacao = Validacao::validar([
        'email' => ['required', 'email'],
        'password' => ['required']
    ], $_POST);

    if ($validacao->naoPassou('login')) {
        header('Location: /login');
        exit();
    }

    $user = $DB->query(
        query: "SELECT * FROM usuarios WHERE email = :email",
        class: Usuario::class,
        params: compact('email')
    )->fetch();

    if ($user) {
        if (!password_verify($password, $user->password)) {
            flash()->push('validacoes_login', ['Usuário ou senha estão incorretos!']);
            header('Location: /login');
            exit();
        }
    }

    $_SESSION['auth'] = $user;
    flash()->push('mensagem', "Seja bem vindo {$user->name}!");
    header('Location: /');
    exit();
}

view("login");