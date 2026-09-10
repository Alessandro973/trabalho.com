<?php
session_start();

require_once __DIR__ . '/Aluno.php';

$aluno = new Aluno();

$aluno->setNome($_POST['nome'] ?? '');
$aluno->setNota1($_POST['nota1'] ?? 0);
$aluno->setNota2($_POST['nota2'] ?? 0);
$aluno->setNota3($_POST['nota3'] ?? 0);
$aluno->setFaltas($_POST['faltas'] ?? 0);

$_SESSION['aluno'] = [
    'nome'               => $aluno->getNome(),
    'nota1'              => $aluno->getNota1(),
    'nota2'              => $aluno->getNota2(),
    'nota3'              => $aluno->getNota3(),
    'faltas'             => $aluno->getFaltas(),
    'media'              => number_format($aluno->calcularMedia(), 1),
    'presenca'           => number_format($aluno->percentualPresenca(), 1),
    'porcentagem_faltas' => number_format($aluno->percentualFaltas(), 1),
    'situacao'           => $aluno->mostrarResultado()
];

header('Location: resultado.php');
exit;
