<?php

$host = "127.0.0.1";
$usuario = "root";
$banco = "tcc";
$senha = "";

$mysqli = new mysqli ($host, $usuario, $senha, $banco);

if($mysqli -> connect_errno) {
    echo "Falha ao conectar: (" . $mysqli -> connect_errno . ") " . $mysqli -> connect_errno;
}

?>