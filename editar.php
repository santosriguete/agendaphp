<?php
    $posicao = $_GET['posicao'];
    $arquivo = fopen("contatos.txt", "r");
    while(!feof($arquivo))
    {
        $pessoa = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Meus Clientes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <font face=arial>
        <body style="background-color:#363636">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <header>
        <br><br><br>
        <center><img src="imagens/logo_contatos.png" height="100""></center>
            <nav class="navbar navbar-expand-lg navbar-ligth bg-ligth">
                <div class="container-fluid">
                </div>
            </nav>
        </header>
        <div class="container-fluid">
            <section>
                <br/>
                <div class="row justify-content-center row-cols-2 row-cols-md-1 mb-3 text-left">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-hearder py-3">
                            <center>
                                <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                <font face=arial color="#000000">
                                </svg>&nbsp;<b>Editar Cadastro de Cliente</b></h4>
                                </font>
                            </center>
                            </div>
                            <div class="card-body">
                            <form action="edita.php?posicao=<?php echo $posicao; ?>" method="POST">
                                <div class="form-group">     
                                    <label>Nome:</label>
                                    <input type="text" class="form-control" name="nome" value="<?php echo $pessoa[$posicao]; ?>" required/>
                                    <br/>
                                    <label>Data de Nascimento:</label>
                                    <input type="date" class="form-control" name="nascimento" value="<?php echo $pessoa[$posicao+1]; ?>" required/>
                                    <br/>
                                    <label>CPF:</label>
                                    <input type="number" class="form-control" name="cpf" value="<?php echo $pessoa[$posicao+2]; ?>" required/>
                                    <br/>
                                    <label>Celular:</label>
                                    <input type="number" class="form-control" name="celular" value="<?php echo $pessoa[$posicao+3]; ?>" required/>
                                    <br/>
                                    <label>Endereço:</label>
                                    <input type="text" class="form-control" name="endereco" value="<?php echo $pessoa[$posicao+4]; ?>" required/>
                                    <br/>
                                    <label>E-mail:</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo $pessoa[$posicao+5]; ?>" required/>
                                    <br/>
                                    <center>
                                    <button type="submit" class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                    </svg>
                                     Atualizar
                                    </button>
                                    </center>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Cliente</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php
                            include 'cadastro.php';
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <hr/>
            <br><br><br>
            <font face=arial color="#f8f8ff">
            <center><b>Agenda de Clientes - Desenvolvida por Carlos Eduardo dos Santos e Alexandre Cubateli Zanin.</b></center>
            </font>
        </footer>
    </body>
</html>