<?php
    namespace Projeto\HTMLPHP\HTML;

    require_once('../PHP/Conexao.php');
    require_once('../PHP/Inserir.php');

    use Projeto\HTMLPHP\PHP\Conexao;
    use Projeto\HTMLPHP\PHP\Inserir;


?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
</head>
<body>
    <form method="POST">
        <label>Nome: </label>
        <input type="text" name="tNome" placeholder = "Informe seu nome"/><br><br>

        <label>Telefone: </label>
        <input type="text" name="tTelefone" placeholder="Informe seu Número"/><br><br>

        <button> Cadastrar </button>

        <?php

        if($_POST['tNome'] != "" && $_POST['tTelefone'] != ""){
            $conexao = new Conexao();
            $cad     = new Inserir();
            echo $cad->cadastrar($conexao, "pessoa", $_POST['tNome'], $_POST['tTelefone']);
            return; 
        }
        echo "Erro, Preencha o campo!";
        ?>
    </form>
    <a href="ConsultarPessoa.php"><button>Consultar</button></a> 
    <a href="AtualizarPessoa.php"><button>Atualizar</button></a>
    <a href="ExcluirPessoa.php"><button>Excluir</button></a>   
</body>
</html>