<?php
session_start();
if (!isset($_SESSION["id_empresa"])) {
  echo "<script>
  alert('Ops, você não deveria estar aqui');
  location.href='../login.php';
  </script>";
  exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bem vindo!</title>
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
         <a href="../home/index.html" class="logo1"> <img src="../home/images/logo1.png" height="60px" width="265px"></a>
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
            <img src="../perfilcandidato/img/add.png" alt="Anna Smith" />
          </div>
          <h2>
          <?php 
          echo $_SESSION["nome_fantasia"]; 
          ?>
          </h2>
          <p>
          <?php
          echo $_SESSION["descricao_empresa"];
          ?>
          </p>
          <p>
          <?php
          echo $_SESSION["email_corporativo"];
          ?>
          </p>
		  <?php
			require_once "../conexao.php";
			$id_empresa = $_SESSION["id_empresa"];
			$query = "SELECT * FROM vaga WHERE id_empresa = $id_empresa";
			//echo $query;
			$executar = mysqli_query($conexao,$query);
			$totalvagas = mysqli_num_rows($executar);		
			
		  ?>
          <ul class="about">
            <li><span></span></li>
            <li><span><?php echo $totalvagas; ?></span>Vagas Criadas</li>
            <li><span></span></li>
          </ul>
          <ul class="about">
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
          </ul>
          <div class="content">
            <ul>  
              <i class="fab fa-instagram"></i>
              <i class="fab fa-linkedin"></i>
            </ul>
          </div>
        </div>
        <div class="right__col">
          <nav>
          <ul>
            <li><a href="">Candidatos</a></li>
            <li><a class="btn-create" id="btn-create" href="../cadvaga/cadvagas.php">Criar vaga</a></li>
            <li><a class="btn-logout" href="../logout.php">sair</a></li>
          </ul>
          </nav>
		  Vagas cadastradas
      <br><br>
      <?php
      require_once "../conexao.php";
      $query1 = "SELECT a.id_vaga, a.tipo_contratacao,a.titulo_vaga,a.funcao,a.requisitos,a.salario_mensal,a.beneficios,a.jornada_trabalho,
                a.informacoes_adicionais,a.endereco_trabalho,a.numero_vagas,a.link, b.nome_fantasia 
                FROM vaga AS a INNER JOIN empresa AS b 
                ON a.id_empresa = b.id_empresa
                WHERE a.id_empresa = $id_empresa";
      $executar1 = mysqli_query($conexao,$query1);
      $n = 1;
      while($dados = mysqli_fetch_array($executar1)){
        $_SESSION['id_vaga'] = $dados['id_vaga'];
        echo "
          <div class='job-entry'>
            <p>Nº: $n</p>
            <p><strong>Titulo da vaga:</strong> $dados[titulo_vaga]</p>
            <p><strong>Tipo de contratação:</strong> $dados[tipo_contratacao]</p>
            <p><strong>Salário mensal:</strong> $dados[salario_mensal]</p>
            <p><strong>Número de vagas:</strong> $dados[numero_vagas]</p>
              <div class='delete-container'>
              <a href='excluir.php?vaga=$_SESSION[id_vaga]' class='btn-excluir'>excluir</a>
            </div>
            <br/><hr/><br/>
          </div>
        ";
        $n++;
      }
      echo "</ul>";
      ?>		
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
