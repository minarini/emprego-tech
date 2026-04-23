<?php
session_start();
// Verificar se o usuário não está logado
if (!isset($_SESSION["id_empresa"])) {
  echo "<script>
  alert('Ops, você não deveria estar aqui');
  location.href='../login.php';
  </script>";
  exit();
}

//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastrar Vaga</title>
	<link rel="icon" href="../images/boneco.png" type="image/png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	<div class="container" id="sendjobs">
		<header>
			<nav>
				<div class="nav-container">
			        <a href="index.html">  
			        </a>
					<i class="fas fa-bars btn-menumobile"></i>
					<ul>
						<li><a href="../vagas/vagas.html">duvidas</a></li>
						<li><a href="#">contato</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<main id="sendjobs-container" class="wrapper">
			<h1>Preencha os dados da vaga</h1>
			<div class="input-box">
			<form action= "cadastrarvaga.php" method="POST">
				<label>Título da vaga <span class="required">*</span></label>
				<input type="text" name="titulo_vaga" placeholder="Insira o título da vaga">
			</div>
			<div class="input-box">
				<label>Função <span class="required">*</span></label>
				<textarea name="funcao" placeholder="Insira a Função da vaga"></textarea>
			</div>
			<div class="input-box">
				<label>Requisitos<span class="required">*</span></label>
				<textarea name="requisitos" placeholder="Insira os requisitos da vaga"></textarea>
			</div>
			<div class="input-box">
				<label>Salário <span class="required">*</span></label>
				<textarea name="salario_mensal" placeholder="Insira o salario da vaga"></textarea>
			</div>
			<div class="input-box">
				<label>Beneficios <span class="required">*</span></label>
				<input type="text" name="beneficios" placeholder="Insira os beneficios dessa vaga">
			</div>
			<div class="input-box">
				<label>Jornada de Trabalho <span class="required">*</span></label>
				<input type="text" name="jornada_trabalho" placeholder="Insira a jornada de trabalho">
			</div>
			<div class="input-box">
				<label>Informações Adicionais  <span class="required">*</span></label>
				<input type="text" name="informacoes_adicionais" placeholder="Insira informações adicionais">
			</div>
			<div class="input-box">
				<label>Endereço <span class="required">*</span></label>
				<input type="text" name="endereco_trabalho" placeholder="Insira o endereço da empresa">
			</div>
			<div class="input-box">
				<label>numero de vagas <span class="required">*</span></label>
				<input type="text" name="numero_vagas" placeholder="Insira o numero de vagas">
			</div>
			<div class="input-box">
				<label> link do formulario:  <span class="required">*</span></label>
				<input type="text" name="link" placeholder="Adicione o link do formulario">
			</div>
			<div class="input-box">
				<label>Tipo de contratação <span class="required">*</span></label>
				<select name="tipo_contratacao">
					<option value="">Escolha uma opção</option>
					<option value="pj">PJ</option>
					<option value="clt">CLT</option>
					<option value="homeoffice">Home Office</option>
					<option value="freelancer">Free Lancer</option>
				</select>
			</div>
			<div class="input-box">
				<input type="submit" name="enviar">
			</div>
		</main>
	</div>
</body>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</html>