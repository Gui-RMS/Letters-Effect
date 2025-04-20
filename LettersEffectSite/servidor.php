<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');
// Dados para conexão
$servidor = "localhost"; // Servidor
$bd = "letterseffect"; //Bancode Dados
$usuario = "root"; // Usuário
$senha = ""; // Senha
// Conectando
$conn = mysqli_connect($servidor, $usuario, $senha) or die("ERRO NA CONEXÃO");
// Seleciona Banco de Dados a ser utilizado
$db= mysqli_select_db($conn, $bd) or die("Erro na seleção do banco");

if (isset($_GET['name']) && isset($_GET['fase']) && isset($_GET['time'])) {
    // Escape the input to prevent SQL injection
    $name = $conn->real_escape_string($_GET['name']);
    $fase = (int)$_GET['fase'];
    $time = (int)$_GET['time']; // Cast time to an integer for safety
	$nomefase = $conn->real_escape_string($_GET['nomefase']);
	$dia =  date("d/m/Y");
	
    // Prepare and execute the SQL query
    $sql = "INSERT INTO ficha (aluno, fase, tempo, nomefase, dia) VALUES ('$name', '$fase', '$time', '$nomefase', '$dia')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error: 'name', 'fase' and 'time' parameters are required.";
}

// Close connection
$conn->close();
?>