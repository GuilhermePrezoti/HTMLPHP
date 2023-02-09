<?php
    namespace Projeto\HTMLPHP\HTML;

    require_once('../PHP/Conexao.php');
    require_once('../PHP/Atualizar.php');

    use Projeto\HTMLPHP\PHP\Conexao;
    use Projeto\HTMLPHP\PHP\Atualizar;


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <form method ="POST">
        <label>Código: </label>
        <input type="number" name="tCodigo" required/><br><br>

        <label>Campo: </label>
        <input type="text" name="tCampo" required/><br><br>

        <label>Novo Dado: </label>
        <input type="text" name="tNovoDado" required/><br><br>

        <button>Atualizar</button>

        <?php
            if($_POST['tCampo'] != "" && $_POST['tNovoDado'] != "" && $_POST['tCodigo'] != 0 ){
                $conexao = new Conexao();
                $update = new Atualizar();
                echo $update->update($conexao, $_POST['tCampo'], $_POST['tNovoDado'],$_POST['tCodigo'], "pessoa"); 
                return; 
            }//fim do if
            echo "Impossível Atualizar, preencha os campos!";
        ?>
    </form>
    <a href="ConsultarPessoa.php"><button>Consultar</button></a> 
    <a href="CadastrarPessoa.php"><button>Inserir</button></a>
    <a href="ExcluirPessoa.php"><button>Excluir</button></a>  
</body>
</html>