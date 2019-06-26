<?php 

$dsn = "mysql:host=localhost;dbname=landpage;port=3306";
$user = "root";
$pass = "";

$conexao = new PDO($dsn, $user, $pass);


$query = $conexao->prepare('INSERT INTO cadastro (id, nome, email)
VALUES (null,"'.$_POST['nome'].'","'.$_POST['email'].'")');
$resultado = $query->execute();



if($resultado){
    header('Location: sucesso.php'); 
} else {
    header('Location: erro.php');
}



