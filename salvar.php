<?php
require_once "conexao.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $nome = $_POST["name"];
    $presenca = $_POST["attending"];
    $mensagem = $_POST["message"];

    
    $sql = "INSERT INTO confirmacoes (nome, presenca, mensagem) 
            VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);

    
    $stmt->bind_param("sss", $nome, $presenca, $mensagem);

    
    if ($stmt->execute()) {
        echo "Confirmação salva com sucesso!";
    } else {
        echo "Erro ao salvar: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>