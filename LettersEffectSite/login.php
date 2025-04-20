<!DOCTYPE html>
<html>
<head>
<title>Letters Effect</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/Style.css">
<link rel="stylesheet" href="css/Navbar.css">
<link rel="stylesheet" href="css/Login.css">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

</head>

<body>

<?php
		require_once"conecta.php";  	//ini_set("display_errors", "off");
?>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">

<ul>
	<li href="#" class="ex1 w3-animate-opacity" >Inicio</li>
	<li class="ex2 w3-animate-opacity">Sobre</li>
	<li class="ex3 w3-animate-opacity">Equipe</li>
	<li class="ex4 w3-animate-opacity">Pesquisa</li>
</ul>
<link rel="stylesheet" href="css/Login.css">

<BR> <BR> <BR> <BR> <BR>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Logar</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Cadastrar</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
				<form method="post">
					<label for="user" class="label">Usuário</label>
					<input id="user" name="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Senha</label>
					<input id="pass" name="senha"  type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Manter conectado</label>
				</div>
				<div class="group">
					<input type="submit" name="Logar" class="button" value="Logar">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="recuperacao.php">Esqueceu a senha?</a>
				</div>
			</div> </form>
			
				<?php
	if(array_key_exists('Logar', $_POST)) { 
	$user =$_POST["user"];
	$senha =$_POST["senha"];
	
	
	$sql1="SELECT * FROM Login where Nome= '$user' ";
	$res=mysqli_query($conexao, "$sql1");
	$registro=mysqli_fetch_row($res);
	$usu=$registro[1];
	$pass=$registro[2];	
    
	if ($user == $usu && $senha == $pass) {
	header('Location: cadastros.php');
	}
	else {
		//header('Location: login.php');
	}
	}
	
		?>
		<form method="post">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Usuário</label>
					<input id="user" name="CdUsu" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Senha</label>
					<input id="pass" name="CdSenha" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass"  class="label">Email</label>
					<input id="pass" name="CdEmail" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" name="Inserir" value="Inserir">
				</div>

				<div class="foot-lnk">
					<label for="tab-1">Já tem uma conta?</a>
				</div>
			</div>
			</form>
	<?php
	if(array_key_exists('Inserir', $_POST)) { 
	$Usu=$_POST["CdUsu"];
	$Senha=$_POST["CdSenha"];
	$Email=$_POST["CdEmail"];

	$sqlD1="INSERT INTO Login (Nome, Senha, Email) VALUES ('$Usu', '$Senha', '$Email')";
	$res2=mysqli_multi_query($conexao, "$sqlD1");
	
	} ?>
		</div>
	</div>
</div>
</div>
</body>
</html>

