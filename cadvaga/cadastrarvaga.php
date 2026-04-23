<meta charset="utf-8"/>
<?php
	session_start();
	//print_r($_SESSION);
    require_once "../conexao.php";
    $titulo_vaga = $_POST ["titulo_vaga"];
    $funcao = $_POST["funcao"];
    $requisitos = $_POST["requisitos"];
    $salario_mensal = $_POST["salario_mensal"];
    $beneficios = $_POST["beneficios"];
    $jornada_trabalho = $_POST["jornada_trabalho"];
    $informacoes_adicionais = $_POST["informacoes_adicionais"];
    $endereco_trabalho = $_POST["endereco_trabalho"];
    $numero_vagas = $_POST["numero_vagas"];
    $tipo_contratacao = $_POST["tipo_contratacao"];
    $link = $_POST["link"];
	$id_empresa = $_SESSION['id_empresa'];

        $checagem = "SELECT titulo_vaga FROM vaga WHERE titulo_vaga = '$titulo_vaga'";
        $checar = mysqli_query($conexao, $checagem);
        $buscar = mysqli_num_rows($checar);

        if($buscar == 0){
            $query = "INSERT INTO vaga (titulo_vaga, funcao, 
            requisitos, salario_mensal, beneficios, jornada_trabalho, informacoes_adicionais, endereco_trabalho, 
            numero_vagas, tipo_contratacao, link, id_empresa)
                VALUES ('$titulo_vaga', '$funcao','$requisitos','$salario_mensal','$beneficios', 
                '$jornada_trabalho','$informacoes_adicionais', '$endereco_trabalho','$numero_vagas','$tipo_contratacao','$link',$id_empresa)";
            $inserir = mysqli_query ($conexao, $query);

            if($inserir==TRUE){
                echo "<script>
                            alert('Vaga cadastrada com sucesso');
                            location.href='../perfilempresa/perfilemp.php';
                        </script>";
            }else{
                echo "<script>
                            alert ('Não foi possível cadastrar a vaga');
                        </script>
                ";
            }
        }else{
            echo "<script>
                        alert ('Você já cadastrou essa vaga');
                        history.back();
                </script>
            ";
        }
?>