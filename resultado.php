<?php
session_start();


if (!isset($_SESSION['aluno'])) {
    header('Location: index.html');
    exit;
}


$aluno = $_SESSION['aluno'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Aluno</title>
</head>
<body>

    <h1>Dados do Aluno</h1>

    <p><b>Nome:</b> <?php echo $aluno['nome']; ?></p>
    <p><b>Nota 1:</b> <?php echo $aluno['nota1']; ?></p>
    <p><b>Nota 2:</b> <?php echo $aluno['nota2']; ?></p>
    <p><b>Nota 3:</b> <?php echo $aluno['nota3']; ?></p>
    <p><b>Faltas:</b> <?php echo $aluno['faltas']; ?></p>
    <p><b>Média:</b> <?php echo $aluno['media']; ?></p>
    <p><b>Presença:</b> <?php echo $aluno['presenca']; ?>%</p>
    <p><b>Porcentagem de Faltas:</b> <?php echo $aluno['porcentagem_faltas']; ?>%</p>
    <p><b>Resultado Final:</b> <?php echo $aluno['situacao']; ?></p>

    <br>
    <a href="index.html">Voltar para o formulário</a>

</body>
</html>
