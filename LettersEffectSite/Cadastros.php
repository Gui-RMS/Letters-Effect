
<html lang="pt-BR">
<head>
<title>Letters Effect</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/Style2.css">
<link rel="stylesheet" href="css/Tables.css">
<link rel="stylesheet" href="css/Navbar.css">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

</head>

<body>

<!-- First Parallax Image with Logo Text -->

<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
<ul>
	<li href="#" class="ex1 w3-animate-opacity" >Inicio</li>
	<li class="ex2 w3-animate-opacity">Sobre</li>
	<li class="ex3 w3-animate-opacity">Equipe</li>
	<li class="ex4 w3-animate-opacity">Pesquisa</li>
</ul>
  <div class="w3-display-middle" style="white-space:nowrap;">
   <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">  
    <form action="cadastros.php" method="post">
	
		 <h2> Cadastrar Aluno </h2> 
		 
        <H3> Entre com o nome: </H3> <BR>
        <input type="text" id="txtAluno" name="txtAluno"  class="forms" required> <BR> <BR>
		
        <button type="submit" name="Cadastrar" class="section-btn section-btn:hover" >Cadastrar</button>
		
		<?php
		require_once"conecta.php"; 

	if(array_key_exists('Cadastrar', $_POST)) { 
	$Aluno =$_POST["txtAluno"];
	
	$sql="INSERT INTO alunos (Nome) VALUES ('$Aluno') ";
	$res=mysqli_query($conexao,"$sql");
	header('Location: cadastros.php');
	}
		?>
    </form>
   </span> 
	
   
   <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">  
    <form method="post">
	<h2> Alterar Aluno </h2> 
	<H3> Selecione o ID: </H3> 
	<select  name="taskOption" >
		 
		
		<?php
		$sqlCod="SELECT * FROM Alunos ORDER BY idAlunos";
	$sql2=mysqli_query($conexao, "$sqlCod");
	while($registro=mysqli_fetch_row($sql2))
	{
	
	$codigo=$registro[0];

	echo (" <option value='$codigo'> $codigo </option>");
	
	}
	
		?>
		
	 </select>	
        <label for="Entre com o nome: "> </label> <BR>
        <input type="text" id="txtAlunoalt" name="txtAlunoalt"  class="forms" required> <BR> <BR>
		
        <button type="submit" name="Alterar" class="section-btn section-btn:hover" >Alterar</button>
		
		<?php 
	if(array_key_exists('Alterar', $_POST)) { 
	$Alunoalt =$_POST["txtAlunoalt"];
	$option = isset($_POST['taskOption']) ? $_POST['taskOption'] : false;
	
	$sql3="update alunos set Nome = '$Alunoalt' WHERE idAlunos = '$option' ";
	$res2=mysqli_query($conexao,"$sql3");
	header('Location: cadastros.php');
	}
		?>
    </form>
   </span> 
   
   <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">  
    <form method="post">
	<h2> Excluir Aluno </h2> 
	<H3> Selecione o ID: </H3> 
	<select  name="taskOption" >
		 
		
		<?php
		$sqlCod="SELECT * FROM Alunos ORDER BY idAlunos";
	$sql2=mysqli_query($conexao, "$sqlCod");
	while($registro=mysqli_fetch_row($sql2))
	{
	
	$codigo=$registro[0];

	echo (" <option value='$codigo'> $codigo </option>");
	
	}
	
		?>
		
	 </select>	
	 
        <label for="Entre com o nome: "> </label> <BR> <BR>
        <button type="submit" name="Excluir" class="section-btn section-btn:hover" >Excluir</button>
		
		<?php 
	if(array_key_exists('Excluir', $_POST)) { 
	$option = isset($_POST['taskOption']) ? $_POST['taskOption'] : false;
	
	$sql4="delete from alunos WHERE idAlunos = '$option' ";
	$res3=mysqli_query($conexao,"$sql4");
	header('Location: cadastros.php');
	}?>
    </form>
   </span> 
 
	<span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">  

	    <h2> <a href="listar.php" > Buscar Aluno </a> </h2> 
	
   </span> 
  
  </div>

</div>
<script src="js/Tables.js"></script>

</body>
</html>

