<?php
    class Handler
    {
        public static function arrayHandler()
        {
            $a = [];
            $a['nome'] = $_POST['nome'];
            $a['nascimento'] = $_POST['nascimento'];
            $a['cpf'] = $_POST['cpf'];
            $a['celular'] = $_POST['celular'];
            $a['endereco'] = $_POST['endereco'];
            $a['email'] = $_POST['email'];

            $gravar = $_POST['nome']."|".$_POST['nascimento']."|".$_POST['cpf']."|".$_POST['celular']."|".$_POST['endereco']."|".$_POST['email']."|";
            $arquivo = fopen('contatos.txt', 'a+');
            fwrite($arquivo, $gravar);
            fclose($arquivo);
            return $a;
        }
    }
?>