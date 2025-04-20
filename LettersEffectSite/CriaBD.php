<?php
header('Content-Type: text/html; charset=utf-8');
$dbnome = "LettersEffect";
$conexao= mysqli_connect('localhost','root','') or die("Erro de conexão");
$criadb= mysqli_query($conexao, "CREATE DATABASE if not exists $dbnome  CHARSET utf8 COLLATE utf8_unicode_ci;");
$abre=mysqli_query ($conexao, "USE $dbnome"); 
$Cont = 0;
$Query = "";



$table1 = "CREATE TABLE if not exists `Alunos` (
  
  idAlunos INT NOT NULL AUTO_INCREMENT, Nome VARCHAR(50), PRIMARY KEY (idAlunos))";
  
$table2 = "CREATE TABLE if not exists `Ficha` (
  
  id INT NOT NULL AUTO_INCREMENT, aluno VARCHAR(255) NOT NULL, fase INT NOT NULL, tempo INT NOT NULL, nomefase VARCHAR(50), dia VARCHAR(20), PRIMARY KEY (id))";
  
$table3 = "CREATE TABLE if not exists `Login` (
  
  idProfessor INT NOT NULL AUTO_INCREMENT, Nome VARCHAR(50) NOT NULL, Senha VARCHAR(15) NOT NULL, Email VARCHAR(50) NOT NULL, PRIMARY KEY (idProfessor))";

/* echo $table; */

  $tables = [$table1, $table2, $table3];

  $errors = [];
  
  foreach($tables as $k => $sql){
    $query = @$conexao->query($sql);

    if(!$query)
       $errors[] = "Table $k : Criação Falhou! ($conexao->error)";
    else
       $errors[] = "Table $k : Criação Concluída!";
}

foreach($errors as $msg) {
   echo "$msg <br>";
}

mysqli_close($conexao);

?>