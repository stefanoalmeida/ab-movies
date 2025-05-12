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
$title = $_POST['titulo'];
$year = $_POST['ano'];
$category = $_POST['categoria'];
$description = $_POST['descricao'];
$cover = $_FILES['cover'];

$validacao = Validacao::validar([
    'titulo' =>  ['required', 'min:8'],
    'ano' => ['required'],
    'categoria' => ['required'],
    'descricao' => ['required'],
], $_POST);

if ($validacao->naoPassou('filme')) {
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
