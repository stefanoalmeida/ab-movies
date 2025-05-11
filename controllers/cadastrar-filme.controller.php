<?php
require_once "../Validacao.php";

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: /formulario-novo-filme');
    exit();
}

if (!auth()) {
    abort(403);
}

$user_id = auth()->id;
$title = $_POST['title'];
$year = $_POST['year'];
$category = $_POST['category'];
$description = $_POST['description'];
$cover = $_FILES['cover'];

$validacao = Validacao::validar([
    'title' =>  ['required', 'min:8'],
    'year' => ['required'],
    'category' => ['required'],
    'description' => ['required'],
], $_POST);

if ($validacao->naoPassou('registrar')) {
    header('Location: /formulario-novo-filme');
    exit();
}

$novoNome = md5(rand());
$extensao = pathinfo($_FILES['cover']['name'], PATHINFO_EXTENSION);
$cover = "images/$novoNome.$extensao";

move_uploaded_file($_FILES['cover']['tmp_name'], __DIR__ . '/../public/' . $cover);

$DB->query(
    query: "INSERT INTO movies (title, year, category, description, user_id, cover) 
    VALUES (:title, :year, :category, :description, :user_id, :cover)",
    params: compact('title', 'year', 'category', 'description', 'user_id', 'cover')
);

flash()->push('mensagem', "Filme registrado com sucesso!");
header("location: /meus-filmes");
exit();
