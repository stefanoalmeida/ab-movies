<?php

if (!auth()){
    header('Location: /login');
    exit();
}

view("index");