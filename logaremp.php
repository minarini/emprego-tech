<meta charset="utf-8"/>
<?php
    if(isset($_POST["email_corporativo"])){
        $email_corporativo = $_POST["email_corporativo"];
        $senha_empresa = sha1($_POST["senha_empresa"]);

        require_once "conexao.php";

        $query = "SELECT id_empresa, nome, nome_fantasia, email_corporativo, descricao_empresa
                FROM empresa WHERE email_corporativo = '$email_corporativo' AND 
                senha_empresa = '$senha_empresa'";
        $executar = mysqli_query($conexao,$query);
        $checar = mysqli_num_rows($executar);
        if($checar==0){
            echo "<script>
                    alert('Dados incorretos!');
                    history.back();
                </script>             
                ";    
        }else{
            $dados = mysqli_fetch_array($executar);
            session_start();
            $_SESSION["id_empresa"] = $dados["id_empresa"];
            $_SESSION["nome_fantasia"] = $dados["nome_fantasia"];
            $_SESSION["email_corporativo"] = $dados["email_corporativo"];
            $_SESSION["descricao_empresa"] = $dados["descricao_empresa"];

            header("Location: perfilempresa/perfilemp.php");
        }
    }
?>