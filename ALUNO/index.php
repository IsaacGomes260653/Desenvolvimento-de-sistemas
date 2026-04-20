<?php
     include '../conexao.php';
     include '../sessao.php'; 

     $sql = "select * from aluno";
     $consulta = $conexao->query($sql);

     if (isset($_GET['id'])) {
         $id = $_GET['id'];
         $sql = "select * from aluno where id = :id";
         $consultaUp = $conexao->prepare($sql);
         $consultaUp->bindParam(':id', $id);
         $consultaUp->execute();
         $aluno = $consultaUp->fetch(PDO::FETCH_OBJ);
     }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Alunos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <div class="container">
        <div class="cabecalho-sistema">
            <h2><i class="fas fa-users-cog"></i> Gestão de Alunos</h2>
            <div class="usuario-info">
                <i class="fas fa-user-circle"></i> <strong><?php echo $_SESSION['email']; ?></strong>
                <a href="../logout.php" class="btn-sair"><i class="fas fa-sign-out-alt"></i> Sair</a>
            </div>
        </div>

        <form action="inserir.php" method="POST" class="form-cadastro">
            
            <input type="hidden" name="id" value="<?php echo isset($aluno) ? $aluno->id : '' ?>">
            
            <div class="input-group">
                <label><i class="fas fa-user"></i> Nome:</label>
                <input type="text" name="nome" value="<?php echo isset($aluno) ? $aluno->nome : '' ?>" required>
            </div>
            
            <div class="input-group">
                <label><i class="fas fa-calendar-alt"></i> Idade:</label>
                <input type="number" name="idade" value="<?php echo isset($aluno) ? $aluno->idade : '' ?>">
            </div>
            
            <div class="input-group">
                <label><i class="fas fa-envelope"></i> Email:</label>
                <input type="email" name="email" value="<?php echo isset($aluno) ? $aluno->email : '' ?>">
            </div>
            
            <div class="input-group">
                <label><i class="fas fa-phone"></i> Telefone:</label>
                <input type="text" name="telefone" value="<?php echo isset($aluno) ? $aluno->telefone : '' ?>">
            </div>
            
            <div class="btn-container">
                <button type="submit" class="btn-salvar">
                    <i class="fas <?php echo isset($aluno) ? 'fa-sync-alt' : 'fa-save' ?>"></i> 
                    <?php echo isset($aluno) ? 'Atualizar' : 'Salvar' ?>
                </button>
            </div>
        </form>

        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
            <?php while ($linha = $consulta->fetch(PDO::FETCH_OBJ)){ ?>
                <tr>
                    <td><?php echo $linha->id ?></td>
                    <td><?php echo $linha->nome ?></td>
                    <td><?php echo $linha->idade ?></td>
                    <td><?php echo $linha->email ?></td>
                    <td><?php echo $linha->telefone ?></td>
                    <td>
                        <a href="index.php?id=<?php echo $linha->id ?>" class="btn-acao btn-editar"><i class="fas fa-edit"></i></a>
                        <a href="excluir.php?id=<?php echo $linha->id ?>" class="btn-acao btn-excluir"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

</body>
</html>