<meta charset="utf-8"/>
<?php
    require_once "../conexao.php";
    $cnpj = $_POST ["cnpj"];
    $nome = $_POST["nome"];
    $cargo = $_POST["cargo"];
    $razao_social = $_POST["razao_social"];
    $numero_funcionarios = $_POST["numero_funcionarios"];
    $nome_fantasia = $_POST["nome_fantasia"];
    $descricao_empresa = $_POST["descricao_empresa"];
    $telefone_comercial = $_POST["telefone_comercial"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $email_corporativo = $_POST["email_corporativo"];
    $senha_empresa = sha1($_POST["senha_empresa"]);

        $checagem = "SELECT cnpj, email_corporativo FROM empresa 
        WHERE cnpj = '$cnpj' OR email_corporativo = '$email_corporativo'";
        $checar = mysqli_query($conexao, $checagem);
        $buscar = mysqli_num_rows($checar);
        if($buscar == 0){
            $query = "INSERT INTO empresa (nome, email_corporativo, cnpj, senha_empresa, nome_fantasia, cargo, razao_social, 
            numero_funcionarios, descricao_empresa, telefone_comercial, cep, endereco, numero, bairro, cidade)
                VALUES ('$nome', '$email_corporativo', '$cnpj','$senha_empresa','$nome_fantasia','$cargo', 
                '$razao_social','$numero_funcionarios', '$descricao_empresa','$telefone_comercial', '$cep',
                '$endereco','$numero','$bairro','$cidade')";
            $inserir = mysqli_query ($conexao, $query);

            if($inserir==TRUE){
                echo "<script>
                            alert('Seu cadastro foi concluído com sucesso');
                            location.href='planos.php';
                        </script>";
            }else{
                echo "<script>
                            alert ('Não foi possível cadastrar, tente novamente mais tarde');
                            history.back();
                        </script>
                ";
            }
        }else{
            echo "<script>
                        alert ('Você já esta cadastrado. ');
                        history.back();
                </script>
            ";
        }
?>