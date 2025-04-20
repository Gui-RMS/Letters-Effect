<?php
header('Content-Type: text/html; charset=utf-8');
// Dados para conexão
$servidor = "localhost"; // Servidor
$bd = "letterseffect"; //Bancode Dados
$usuario = "root"; // Usuário
$senha = ""; // Senha
// Conectando
$conexao = mysqli_connect($servidor, $usuario, $senha) or die("ERRO NA CONEXÃO");
// Seleciona Banco de Dados a ser utilizado
$db= mysqli_select_db($conexao, $bd) or die("Erro na seleção do banco");
?>