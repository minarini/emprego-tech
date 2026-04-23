<?php
session_start();
if (!isset($_SESSION["nome"])) {
  echo "<script>
  alert('Ops, nao era pra voce estar aqui');
  location.href='../login.php';
  </script>";
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Bem vindo!</title>
    <link rel="icon" href="../images/boneco.png" type="image/png">
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- header -->
   <header class="header">
      <div class="logos-container">
         <a href="#home" class="logo1"> <img src="../home/images/logo1.png" height="60px" width="265px"></a>
      </div>
      <nav class="navbar">
         <a href="#home">Inicio</a>
         <a href="#about">Sobre nós</a>
         <a href="../cadempresa/html/cadastro_empresa.php">Para empresas</a>
         <a href="../vagas/vagas.html">Vagas</a>
         <a href="#services">Parcerias</a>
         <a href="#share">Contato</a>
         <a href="../login.php" class="btn">Login</a>
      </nav>
      
      <div id="menu-btn" class="fas fa-bars"></div>
   </header>
   <!-- end -->
    <div class="header__wrapper">
      <header></header>
      <div class="cols__container">
        <div class="left__col">
        <div class="img__container">
          <img id="perfil" class="" src="img/add.png" alt="foto de perfil" />
          <input type="file" id="selecionarFoto" style="display:none;"0 />
          <label for="selecionarFoto" class="selecionarFotoLabel">Escolher Foto</label>
        </div>
          <h2>
          <?php
            echo $_SESSION["nome"];
            ?>
            </h2>
            <p>
            <p>
            <?php
            echo $_SESSION["email"];
            ?>
            </p>
          <ul class="about">
          </ul>
          <div class="content">
            <p>
            </p>
            <ul>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-linkedin"></i>
            </ul>
          </div>
        </div>
        <div class="right__col">
          <nav>
            <ul>
              <li><a href="">Vagas Disponíveis</a></li>
              <li><a class="btn-logout" href="../logout.php">sair</a></li>
            </ul>
          </nav>
          <div>
            
				<?php
				require_once "../conexao.php";
				$query = "SELECT a.id_vaga, a.tipo_contratacao,a.titulo_vaga,a.funcao,a.requisitos,a.salario_mensal,a.beneficios,a.jornada_trabalho,
					  a.informacoes_adicionais,a.endereco_trabalho,a.numero_vagas,a.link, b.nome_fantasia 
					  FROM vaga AS a INNER JOIN empresa AS b 
					  ON a.id_empresa = b.id_empresa";
			
				$executar = mysqli_query($conexao,$query);	
				while($dados = mysqli_fetch_array($executar)){
					echo "
          <div class='job-entry'>
						  <p><strong>Nome da Empresa:</strong> $dados[nome_fantasia]</p>
						  <p><strong>Vaga:</strong> $dados[titulo_vaga]</p>
						  <p><strong>Salário:</strong> $dados[salario_mensal]</p>
              <p><strong>Requisitos:</strong> $dados[requisitos]</p>
						  <p><strong>Link da Avaliação:</strong>  <a href='$dados[link]'class='btn'> acessar</a></p>
						 <br/><hr/><br/>
             </div>
					"	;
				}
				echo "</ul>";
            ?>
          </div>
        </div>
      </div>
    </div>
    <script src="upload.js"></script>
  </body>
</html>
