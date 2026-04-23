<meta charset="utf-8"/>
<?php
    if(isset($_POST["email"])){
        $email = $_POST["email"];
        $senha = sha1($_POST["senha"]);

        require_once "conexao.php";

        $query = "SELECT id_candidato, nome, email
                FROM candidato WHERE email = '$email' AND 
                senha = '$senha'";
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
            $_SESSION["id_candidato"] = $dados["id_candidato"];
            $_SESSION["nome"] = $dados["nome"];
            $_SESSION["email"] = $dados["email"];

            header("Location: perfilcandidato/perfilcand.php");
        }
    }
?>