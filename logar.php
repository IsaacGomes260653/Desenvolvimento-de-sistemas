<?php
include "conexao.php";

$email = $_POST['email'];
// Mantendo o md5 que você já usava para a senha
$senha = md5($_POST['senha']); 

$sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
$stmt->execute();

session_start();

// Se encontrou o usuário com esse email e senha no banco:
if($stmt->rowCount() > 0) {
    $_SESSION['logado'] = true;
    $_SESSION['email'] = $email;
    
    // Vai para o painel do aluno
    header('Location: aluno/index.php');
    exit;
} 
// Se não encontrou (email ou senha errados):
else {
    // Volta para o login avisando do erro na URL (?erro=1)
    header('Location: index.php?erro=1');
    exit;
}
?> 