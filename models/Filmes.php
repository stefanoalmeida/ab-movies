<?php

class Filmes
{
    public $cover;
    public $title;
    public $year;
    public $category;
    public $description;
    public $user_id;

    public function query($where, $params) {
        $database = new DB(config('database'));
    
        return $database->query("select * from movies where $where", self::class, $params);
    }

    public static function findById($id) {
        return (new self)->query('id = :id', ['id' => $id])->fetch();
    }

    public static function findAll($filtro) {
        return (new self)->query('title like :filtro', ['filtro' => "%$filtro%"])->fetchAll();
    }

    public static function getMyMovies($user_id) {
        return (new self)->query('user_id = :user_id', ['user_id' => $user_id])->fetchAll();
    }
}