<?php
    namespace Projeto\HTMLPHP\PHP;

    class Conexao{

        public function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root', '', 'phpCrud');
                if($conn){
                    echo "Conectado com sucesso!";
                    return $conn;
                }//fim do if

            }//fim do try
            
            catch(Exception $erro){
                return $erro;

            }//fim do catch

        }//fim da função




    }//fim da class



?>