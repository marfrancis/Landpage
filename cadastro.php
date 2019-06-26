<?php 
include_once 'conexao.php';

try {

$query = $conexao->prepare('INSERT INTO cadastro (nome, email)
VALUES (:nome,:email)');
$resultado = $query->execute(["nome"=>$_POST['nome'],"email"=>$_POST['email']]);



if($resultado){
    header('Location: sucesso.php'); 
} else {
    echo "<H1>Erro de cadastro</H1>";
}

}catch(PDOException $ex){
    echo 'Serviço indisponível';
}





