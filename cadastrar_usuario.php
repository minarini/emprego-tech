<meta charset="utf-8"/>
<?php
    require_once "conexao.php";
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = sha1($_POST["password"]);

    $diploma = $_FILES["diploma"];

    if(!preg_match("/\.(pdf|bmp|png|jpg|jpeg){1}$/i", $diploma["name"], $ext)){
        echo "<script>
                   alert('O arquivo enviado não é uma imagem');
                   history.back();
              </script>             
        ";       
    }else if(strlen($nome)<=1 or strlen($nome)>50){
        echo "<script>
                   alert('Nome Inválido');
                   history.back();
              </script>             
        ";
    }else{
        $checagem = "SELECT email FROM candidato WHERE email = '$email'";
        $checar = mysqli_query($conexao, $checagem);
        $buscar = mysqli_num_rows($checar);
        if($buscar == 0){
            $extensao = explode(".", $diploma["name"]);
            $nomedoarquivo = md5(uniqid(time())).".".$extensao[1];
            $destino = "diplomas/".$nomedoarquivo;
            $upar = move_uploaded_file($diploma["tmp_name"],$destino);

            if ($conexao){
            $query = "INSERT INTO candidato (nome, diploma, email, senha)
                VALUES ('$nome', '$nomedoarquivo', '$email','$senha')";
            $inserir = mysqli_query ($conexao, $query);
            if($inserir== TRUE and $upar==TRUE){
                
                echo "<script>
                            alert('usuario cadastrado com sucesso');
                            location.href='login.php';
                        </script>
                ";
            }else{
                echo "<script>
                            alert ('Não foi possível cadastrar, tente novamente mais tarde');
                            history.back();
                        </script>
                ";
            }
        }
        }else{
            echo "<script>
                        alert ('Você já esta cadastrado. ');
                        history.back();
                </script>
            ";
        }
    }

?>