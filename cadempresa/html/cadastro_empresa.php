<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../css/cadastrar_empresa.css" />
    <title> Cadastro empresa </title>
    <link rel="icon" href="../images/boneco.png" type="image/png">
  </head>
  <body>
  <!-- header -->
  <header class="header">
    <div class="logos-container">
        <a href="../../home/index.html" class="logo1"> <img src="../images/logo1.png" height="60px" width="265px"></a>
    </div>
    <nav class="navbar">
        <a href="#home">Inicio</a>
        <a href="#about">Sobre nós</a>
        <a href="../../formulario.php">Para candidatos</a>
        <a href="../../vagas/vagas.html">Vagas</a>
        <a href="#services">Parcerias</a>
        <a href="#share">Contato</a>
        <a href="../../login.php" class="btn">Login</a>
    </nav>  
    <div id="menu-btn" class="fas fa-bars"></div>
  </header>
  <!-- end -->

  <!-- formulario -->
    <div class="container">
      <div class="card">
        <h1>Cadastro Empresa</h1>
        <div id="msgError"></div>
        <div id="msgSuccess"></div>
        <form action="../cadastrar_empresa.php" method ="post" >
        <div class="label-float">
          <input type="text" id="nome" name="nome" placeholder=" " required />
          <label id="labelNome" for="nome">Nome do responsável</label>
        </div>
        <div class="label-float">
          <input type="text" id="cargo" name="cargo" placeholder=" " required />
          <label id="labelNome" for="nome">Cargo do responsável</label>
        </div>
        <div class="label-float">
          <input type="text" id="email_corporativo" name="email_corporativo" placeholder=" " required />
          <label id="labelNome" for="nome">Email corporativo</label>
        </div>
        <div class="label-float">
          <input type="text" id="cnpj" name="cnpj" placeholder=" " required />
          <label id="labelNome" for="nome">CNPJ</label>
        </div>
        <div class="label-float">
          <input type="text" id="razao_social" name="razao_social" placeholder=" " required />
          <label id="labelNome" for="nome">Razão social</label>
        </div>
        <div class="label-float">
          <input type="text" id="nome_fantasia" name="nome_fantasia" placeholder=" " required />
          <label id="labelNome" for="nome">Nome da corporação</label>
        </div>
        <div class="label-float">
          <input type="text" id="numero_funcionarios" name="numero_funcionarios" placeholder=" " required />
          <label id="labelNome" for="nome">Numero de funcionarios</label>
        </div>

        <div class="label-float">
          <input type="text" id="descricao_empresa" name="descricao_empresa" placeholder="  " required />
          <label id="labelUsuario" for="usuario">Descrição da empresa</label>
        </div>
        <div class="label-float">
          <input type="tel" id="telefone_comercial" name="telefone_comercial" placeholder=" " required />
          <label id="labelTel" for="telefone">Telefone comercial</label>
        </div>
          <script>
            function validarCEP() {
              var cep = document.getElementById("cep").value;
            
              if (cep.length === 8) {
                alert("CEP válido!");
              } else {
                alert("CEP inválido!");
              }
            }
          </script>
          <div class="label-float"></div>
            <input type="text" id="cep" name="cep">
            <label for="cep">CEP:</label>
          <button onclick="validarCEP()">Validar</button>
          
        <div class="label-float">
          <input type="text" id="endereco" name="endereco" placeholder=" " required />
          <label id="labelUsuario" for="usuario">Endereço</label>
        </div>
        <div class="label-float">
          <input type="text" id="numero" name="numero" placeholder=" " required />
          <label id="labelUsuario" for="usuario">Numero</label>
        </div>
        <div class="label-float">
          <input type="text" id="bairro" name="bairro" placeholder=" " required />
          <label id="labelUsuario" for="usuario">Bairro</label>
        </div>
        
        <div class="label-float">
          <input type="text" id="cidade" name="cidade" placeholder=" " required />
          <label id="labelUsuario" for="usuario">Cidade</label>
        </div>
        <div class="label-float">
          <label id="labelUsuario" for="usuario">Estado</label>
          <div class="row" style="margin-top: 20px">
                <div class="col-sm-12">
                    <label for="carteira"></label>
                    <select id="ufcarteira" class="form-control">
                        <option selected>	São Paulo - SP	</option>
                      </select>
                    </div>
              </div>
          <div class="label-float">
            <input type="password" id="senha_empresa" name="senha_empresa" placeholder=" " required />
            <label id="labelSenha" for="senha">Senha</label>
          <i id="verSenha" class="fa fa-eye" aria-hidden="true"></i>
        </div>

        <div class="label-float">
          <input type="password" id="confirmSenha" placeholder=" " required />
          <label id="labelConfirmSenha" for="confirmSenha"> Confirmar Senha </label>
          <i id="verConfirmSenha" class="fa fa-eye" aria-hidden="true"></i>
        </div>

        <div class="justify-center">
          <button onclick="cadastrar()">Cadastrar</button>
        </div>
      </div>
    </form>
    </div>
    
    <script src="../js/cadastrar_empresa.js"></script>
  </body>
  </html>
</form>