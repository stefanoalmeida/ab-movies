<?php

$mensagem = $_REQUEST["mensagem"] ?? "";

view("registrar", compact("mensagem"));