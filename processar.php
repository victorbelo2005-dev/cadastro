<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Processar os dados (exemplo: salvar no banco de dados)
    echo "Dados recebidos:<br>";
    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Senha: " . $senha . "<br>";
?>