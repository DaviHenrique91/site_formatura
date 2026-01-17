<?php
$host = "3306";
$usuario = "JARVIS";                
$banco = "site_formatura";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>