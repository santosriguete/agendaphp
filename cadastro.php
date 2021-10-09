<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <font face=arial color="#000000">
        <form action="cad.php" method="POST">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Insira o nome do cliente" required/>
                <br/>
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" name="nascimento" placeholder="Insira a data de nascimento do cliente" required/>
                <br/>
                <label>CPF</label>
                <input type="number" class="form-control" name="cpf" placeholder="Insira o CPF do cliente" required/>
                <br/>
                <label>Celular</label>
                <input type="number" class="form-control" name="celular" placeholder="Insira o telefone do cliente" required/>
                <br/>
                <label>Endereço</label>
                <input type="text" class="form-control" name="endereco" placeholder="Insira o endereço do cliente" required/>
                <br/>
                <label>E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Insira o e-mail do cliente" required/>
                <br/>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                    </svg>
                     Fechar
                    </button>
                    <button type="submit" class="btn btn-outline-success"><class="btn btn-outline-dark" type"button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                    </svg>
                     Cadastrar
                    </button>
                    </div>
            </div>
        </form>
    </body>
</html>