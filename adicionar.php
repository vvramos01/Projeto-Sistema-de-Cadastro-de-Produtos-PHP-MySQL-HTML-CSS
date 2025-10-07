<?php
include 'conexao.php';

if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $conn->query("INSERT INTO produtos (nome, descricao, preco) VALUES ('$nome','$descricao','$preco')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Adicionar Produto</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome" required><br>
        <input type="text" name="descricao" placeholder="Descrição" required><br>
        <input type="number" step="0.01" name="preco" placeholder="Preço" required><br>
        <button type="submit" name="submit">Adicionar</button>
    </form>
</body>
</html>
