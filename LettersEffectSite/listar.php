
<html>
<head>
<title>Letters Effect</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/Style2.css">
<link rel="stylesheet" href="css/Listar.css">
<link rel="stylesheet" href="css/Navbar.css">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

</head>

<body>

<!-- First Parallax Image with Logo Text -->

<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
<ul>
	<li onclick="location.href = 'index.html';"class="ex1 w3-animate-opacity"> Inicio </li>
	<li onclick="location.href = 'sobre.html';" class="ex2 w3-animate-opacity"> Sobre  </li>
	<li onclick="location.href = 'equipe.html';" class="ex3 w3-animate-opacity"> Equipe </li>
	<li onclick="location.href = 'login.php';" class="ex4 w3-animate-opacity"> Login </li>
</ul>



<div class="container">
	
	<span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">  
    <form method="post">
	
        <label for="Entre com o nome: "> </label> <BR>
	    <h2> Buscar Aluno </h2> 
        <input type="text" id="txtBusca" name="txtBusca"  class="forms" required> 
		<H3> Selecione a fase: </H3> 
		<select  name="taskOption" >
		 
		<option value='caca-palavras'> Caça-palavras </option>
		<option value='Monte a Imagem'> Monte a Imagem </option>
		<option value='Labirinto de letras'> Labirinto de letras </option>
		</select>	
		
		<BR> <BR>
		
        <button type="submit" name="Buscar" class="section-btn section-btn:hover" >Buscar</button> 
		
		
	<?php 
	ini_set('display_errors', 0);
	require_once"conecta.php";
	if(array_key_exists('Buscar', $_POST)) { 
	$Busca =$_POST["txtBusca"];
	$Num =$_POST["taskOption"];

	$sql5="select * from ficha WHERE aluno = '$Busca' and nomefase = '$Num' ";
	$res4=mysqli_query($conexao,"$sql5");
	$cont = 0;
	
	$rows=mysqli_fetch_all($res4);
	
	$result = array_column($rows, '1');
	$result1 = array_column($rows, '2');
	$result2 = array_column($rows, '3');
	$result3 = array_column($rows, '4');
	$result4 = array_column($rows, '5');	

	}
	?>
	
	    </form>
   </span> 
   
	<div class="table">
		<div class="table-header">
			<div class="header__item"><a id="name" class="filter__link"><?php echo "Nome: $result[0]"; ?></a></div>
			<div class="header__item"><a id="wins" class="filter__link filter__link--number"><?php echo("Fase"); ?></a></div>
			<div class="header__item"><a id="draws" class="filter__link filter__link--number">Tempo de conclusão</a></div>
			<div class="header__item"><a id="draws" class="filter__link filter__link--number">Dia realizado</a></div>

		</div>
		<div class="table-content">	
		
		<?php
		$Cont = 0;

		while ($Cont <= 9) {
			echo (" <div class='table-row'>		
				<div class='table-data'> $result3[$Cont]</div>
				<div class='table-data'> $result1[$Cont] </div>
				<div class='table-data'> $result2[$Cont] </div>
				<div class='table-data'> $result4[$Cont] </div>
		</div> "); 
		$Cont = $Cont + 1;
		};
		?>	
		</div>	
	</div>
</div>
</div>
<script src="js/Tables.js"></script>

</body>
</html>

