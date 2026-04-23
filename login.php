<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" href="images/boneco.png" type="image/png">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
       <!-- header -->
   <header class="header">
      <div class="logos-container">
         <a href="home/index.html" class="logo1"> <img src="images/logo1.png" height="60px" width="265px"></a>
      </div>
      <nav class="navbar">
         <a href="home/index.html">Inicio</a>
         <a href="#about">Sobre nós</a>
         <a href="cadempresa/html/cadastro_empresa.php">Para empresas</a>
         <a href="vagas/vagas.html">Vagas</a>
         <a href="#services">Parcerias</a>
         <a href="#share">Contato</a>
      </nav>
      
      <div id="menu-btn" class="fas fa-bars"></div>
   </header>
   <!-- end -->
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Login Empresa</h2>
                <p class="description description-primary"></p>
                <p class="description description-primary"></p>
                <button id="signin" class="btn btn-primary">logar</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Login Candidato</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>        
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second"></p>
                <form class="form" method="post" action="logarcand.php">
                    <!--candidato-->
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="email" name="email">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="senha" name="senha">
                    </label>
                    <a class="password" href="#">esqueceu sua senha?</a>
                    
                    <button class="btn btn-second">entrar</button>        
                </form>
                <p> Não tem conta ainda? </p>
                <a class="register-button" href="formulario.php">Cadastre-se</a>
            </div><!-- second column -->
        </div><!-- first content-->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Login Candidato</h2>
                <p class="description description-primary"></p>
                <p class="description description-primary"></p>
                <button id="signup" class="btn btn-primary">logar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">login Empresa </h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <!-- EMPRESA-->
                <p class="description description-second"></p>
                <form class="form" method="post" action="logaremp.php">
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email_corporativo" placeholder="email" name="email_corporativo">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="senha" name="senha_empresa">
                    </label>
                
                    <a class="password" href="#">esqueceu sua senha?</a>
                    <button class="btn btn-second">entrar</button>
                </form>
                <p> Não tem conta ainda? </p>
                <a class="register-button" href="cadempresa/html/cadastro_empresa.php">Cadastre-se</a>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="login.js"></script>
</body>
</html>