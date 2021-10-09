<?php
    require 'cadpessoa.php';
    $dados = Handler::arrayHandler();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <font face=arial>
        <body style="background-color:#363636">
        <header>
        <br><br><br>
        <center><img src="imagens/logo_contatos.png" height="100""></center>
            <nav class="navbar navbar-expand-lg navbar-ligth bg-ligth">
                <div class="container-fluid">
                </div>
            </nav>
        </header>
        <br/><br/>
        <div class="row justify-content-center row-cols-2 row-cols-md-2 mb-3 text-justify">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3 text-center">
                        <h4 class="my-0 fw-normal"><b>Confirmação de Cadastro</b></h4>
                    </div>
                    <div class="card-body">
                        <?php
                            echo "<b>Nome: </b>".$dados['nome']."<br/>";
                            echo "<b>Data de Nascimento: </b>".$dados['nascimento']."<br/>";                     
                            echo "<b>CPF: </b>".$dados['cpf']."<br/>";            
                            echo "<b>Celular: </b>".$dados['celular']."<br/>";
                            echo "<b>Endereço: </b>".$dados['endereco']."<br/>";
                            echo "<b>E-mail: </b>".$dados['email']."<br/>";
                        ?>
                        <br/><br/>
                        <a href="index.php"><button class="btn btn-outline-dark">Voltar</button></a>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <hr/>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <font face=arial color="#f8f8ff">
            <center><b>Agenda de Clientes - Desenvolvida por Carlos Eduardo dos Santos e Alexandre Cubateli Zanin.</b></center>
            </font>
        </footer>
    </body>
</html>