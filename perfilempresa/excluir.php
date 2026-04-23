<meta charset="utf-8"/>
<?php
session_start();
if (!isset($_SESSION["id_empresa"])) {
  echo "<script>
  alert('Ops, você não deveria estar aqui');
  location.href='../login.php';
  </script>";
  exit();
}
$id_vaga = $_GET['vaga'];
require_once "../conexao.php";
$query="DELETE FROM vaga WHERE id_vaga = $id_vaga";
//echo $query;exit;
$executar= mysqli_query($conexao,$query);
if($executar==TRUE){
	echo "<script>
			alert('Vaga excluída com sucesso');
			location.href='perfilemp.php';
		</script>";
}else{
	echo "<script>
			alert('Ocorreu algum erro');
			location.href='perfilemp.php';
		</script>";
}
			
