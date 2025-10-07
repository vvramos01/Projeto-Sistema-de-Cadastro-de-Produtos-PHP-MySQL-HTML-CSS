<?php
include 'conexao.php';
$result = $conn->query("SELECT * FROM produtos");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de Produtos</h1>
    <a href="adicionar.php">Adicionar Produto</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nome'] ?></td>
            <td><?= $row['descricao'] ?></td>
            <td>R$ <?= $row['preco'] ?></td>
            <td><a href="deletar.php?id=<?= $row['id'] ?>">Excluir</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
