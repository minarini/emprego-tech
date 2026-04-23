<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro candidato</title>
    <link rel="icon" href="images/boneco.png" type="image/png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');
        :root{
            --primary: #0077b6;
            --secondary: #060648;
            --black:#333;
            --white:#fff;
            --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.1);
        }
        
        *{
            font-family: 'Poppins', sans-serif;
            margin: 0; padding: 0;
            box-sizing: border-box;
            outline: none; border: none;
            text-decoration: none;
            transition: .2s linear;
        }
        html {
            height: 100%;
            background-image: linear-gradient(to right, white, rgb(2, 166, 241));
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-padding-top: 9rem;
            scroll-behavior: smooth;
        }

        .logos-container {
            display: flex;
            align-items: center; 
        }

        html::-webkit-scrollbar{
            width: .8rem;
        }

        html::-webkit-scrollbar-track{
            background: transparent;
        }

        html::-webkit-scrollbar-thumb{
            background: var(--primary);
            border-radius: .5rem;
        }

        section{
            padding: 5rem 7%;
        }

        .heading{
            font-size: 4rem;
            color: var(--primary);
            text-align: center;
            text-transform: uppercase;
            font-weight: bolder;
            margin-bottom: 3rem;
        }

        .btn{
            display: inline-block;
            margin-top: 1rem;
            padding: 1rem 3rem;
            background: var(--primary);
            border-radius: .5rem;
            color: var(--white);
            font-size: 1.7rem;
            cursor: pointer;
        }

        .btn:hover{
            background: var(--secondary);
        }

        /* header */
        .header{
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 1000;
            height: 100px;
            background: var(--white);
            box-shadow: var(--box-shadow);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 2rem 9%;
        }


        .header .logo{
            font-size: 2.5rem;
            font-weight: bolder;
            color: var(--black);
        }

        .header .logo i{
            color: var(--primary);
            padding-right: .5rem;
        }

        .header .navbar a{
            font-size: 1.7rem;
            color: var(--black);
            margin: 0 1rem;
        }

        .header .navbar a:hover{
            color: var(--primary);
        }

        .header .navbar .btn{
            margin-top: 0;
            color: var(--white);
        }

        .header .navbar .btn:hover{
            color: var(--white);
        }

        #menu-btn{
            display: none;
            font-size: 2.5rem;
            margin-left: 1.7rem;
            cursor: pointer;
            color: var(--black);
        }

        #menu-btn:hover{
            color: var(--primary);
        }
        /* end */
        .box{
            color: white;
            position: absolute;
            top: 65%;
            left: 50%;
            font-size: 80%;
            transform: translate(-50%,-50%);
            background-color: rgba(16, 7, 94, 0.712);
            padding: 30px;
            border-radius: 12px;
            width: 32%;
            height: 90%;
            margin-bottom: 30px;
            border-radius: 1%;

        }
        .text{
            margin-top: 20px;
            
        }
        fieldset{
            border: 2px solid rgba(0, 120, 240, 0.685);
            height: 80%; 
        }
        legend{
            border: 2px solid dodgerblue;
            padding: 15px;
            font-size: 14px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 12px;
            margin-bottom: 15px;
        }
        .inputBox{
            width: 100%;
            position: relative;
            margin-top: -10px;
            font-size: 15px;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 5px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 15px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 5px;
            margin-left:;
            border-radius: 10px;
            outline: none;
            font-size: 10px;
        }
        .labelDataNascimento {
            font-size: 15px; /* Ajuste o tamanho da fonte conforme necessário */
        }
        .labelVagaDesejada {
            font-size:15px
        }

        #submit{
            background-image: linear-gradient(to right,rgb(26, 127, 243),rgb(26, 127, 243));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }

        .form-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 0.8em;
        }

        .form-group label {
        color: var(--text-tertiary);
        margin-bottom: 0.3em;
        }

        .form-group input,
        .form-group select {
        padding: 8px 7px;
        border-radius: 5px;
        border: none;
        outline: none;
        }

    </style>
</head>
<body>
       <!-- header -->
   <header class="header">
      <div class="logos-container">
         <a href="home/index.html" class="logo1"> <img src="images/logo1.png" height="60px" width="265px"></a>
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
    <div class="box">
        <form action= "cadastrar_usuario.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend><b>CADASTRO</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <label for="data_nascimento" class="labelDataNascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <div class="form-group">
                    <label for="interest" class="labelVagaDesejada">vaga desejada: </label>
                    <select name="interest">
                      <option value="" disabled selected>Selecione</option>
                      <option value="apartment">Analista de big data</option>
                      <option value="house">Analista de testes de softwares</option>
                      <option value="garden">Arquitetura de redes</option>
                      <option value="other">Analista de Dados</option>
                      <option value="other">Analistas de Sistemas de Computação</option>
                      <option value="other">Analista de Segurança da Informação</option>
                      <option value="other">Ciência da computação</option>
                      <option value="other"> Engenharia de hardware</option>
                      <option value="other">Engenharia de QA (quality assurance)</option>
                      <option value="other">Especialista em bloqueio de anúncios/option>
                      <option value="other">Especialista de cibersegurança</option>
                      <option value="other">Especialista em SEO</option>
                      <option value="other">Desenvolvimento de games</option>
                      <option value="other">Desenvolvimento de mobile ou aplicativos</option>
                      <option value="other">Help desk ou suporte ao cliente</option>
                      <option value="other">Programação de multimídia</option>
                      <option value="other">Programação de computadores</option>
                      <option value="other">Programação web</option>
                      <option value="other"> Profissional de TI</option>
                      <option value="other">Outro</option>
                    </select>
                  </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="ano_formacao" id="ano_formacao" class="inputUser" required>
                    <label for="formacao" class="labelInput">quando se formou?</label>
                </div>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required >
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br><br>
                <div class="inputBox">
                    <input type="password" name="password" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">senha</label>
                    <br><br>
                </div>
                    <div class="inputBox">
                    <div class="text">
                        <h4>Anexe seu diploma: </h4>
                        <input type="file" name="diploma" id="diploma" class="text">
                        <label for="diploma" class=""></label>
                    </div>
                <br>
                <input type="submit" name="botao" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>