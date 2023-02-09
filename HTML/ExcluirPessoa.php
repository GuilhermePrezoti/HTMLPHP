<?php
    namespace Projeto\HTMLPHP\HTML;

    require_once('../PHP/Conexao.php');
    require_once('../PHP/Excluir.php');

    use Projeto\HTMLPHP\PHP\Conexao;
    use Projeto\HTMLPHP\PHP\Excluir;


?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
    <form method="POST">
        <label>Código: </label>
        <input type="number" name="tCodigo"/><br><br>
        
        <button>Excluir</button>

        <?php
            if($_POST['tCodigo'] > 0){
                $conexao = new Conexao();
            $delete = new Excluir();
            echo $delete->deletar($conexao, "pessoa", $_POST['tCodigo']);
            return;
            }//fim do if
            echo "Informe um código válido!";
        ?>
    </form>
    <a href="CadastrarPessoa.php"><button>Inserir</button></a> 
    <a href="AtualizarPessoa.php"><button>Atualizar</button></a>
    <a href="InserirPessoa.php"><button>Inserir</button></a>  
</body>
</html>