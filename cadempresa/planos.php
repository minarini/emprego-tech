<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha um plano</title>
    <link rel="icon" href="images/boneco.png" type="image/png">
    <link rel="stylesheet" href="planos.css">
</head>
<body>
     <!-- header -->
   <header class="header">
      <div class="logos-container">
         <a href="#home" class="logo1"> <img src="images/logo1.png" height="60px" width="265px"></a>
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

<!-- planos -->
<h1 class="heading">Assine um de nossos planos para continuar</h1>
   <div class="container">
      <div class="card">
          <div class="card-title">
              <h2>Mensal</h2>
              <p><i class=""></i><Span>R$ 500.00</Span></p>
          </div>
          <div class="card-content">
              <ul>
                  <li><i class="fa fa-check-circle"></i>Pague por mês podendo cancelar a qualquer momento</li>
                  <li><i class="fa fa-check-circle"></i>Encontre candidatos qualificados</li>
                  <li><i class="fa fa-check-circle"></i>Curto investimento</li>
                  <li><i class="fa fa-check-circle"></i>Um mês para contratar funcionarios ilimitados</li>
                 
              </ul>
              <button><a class="assinar" href="../pagamento/pagamento.html" data-plano="plano1">Assinar</a></button>
          </div>
      </div>
      <div class="card">
          <div class="card-title">
              <h2>Semestral</h2>
              <p><i class=></i><Span>R$ 3000.00</Span></p>
          </div>
          <div class="card-content">
              <ul>
                  <li><i class="fa fa-check-circle"></i>Garanta tranquilidade na contratação</li>
                  <li><i class="fa fa-check-circle"></i>Encontre candidatos qualificados</li>
                  <li><i class="fa fa-check-circle"></i>Contate funcionarios ilimitados neste periodo de tempo</li>
                  <li><i class="fa fa-check-circle"></i>Maiores chances </li> 
              </ul>
              <button><a class="assinar" href="../pagamento/pagamento.html" data-plano="plano2">Assinar</a></button>
          </div>
      </div>
      <div class="card">
          <div class="card-title">
              <h2>Anual</h2>
              <p><i class=""></i><Span>R$ 5000.00</Span></p>
          </div>
          <div class="card-content">
              <ul>
                  <li><i class="fa fa-check-circle"></i>Economize mais de 15%</li>
                  <li><i class="fa fa-check-circle"></i>Encontre candidatos qualificados</li>
                  <li><i class="fa fa-check-circle"></i>Contrate funcionarios ilimitados neste periodo de tempo</li>
                  <li><i class="fa fa-check-circle"></i>Tenha a sua disposição os melhores profissionais</li>
              </ul>
              <button><a class="assinar" href="../pagamento/pagamento.html" data-plano="plano3">Assinar</a></button>
          </div>
      </div>
  </div>
<!-- end -->
</body>
</html>
