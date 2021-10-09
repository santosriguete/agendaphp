<?php
    $arquivo = fopen("contatos.txt", "r");
    $arquivo2 = fopen("contatos2.txt", "a+");
    while(!feof($arquivo))
    {
        $pessoa = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    $posicao = $_GET['posicao'];
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $cpf = $_POST['cpf'];
    $celular = $_POST['celular'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $pessoa[$posicao] = $nome;
    $pessoa[$posicao+1] = $nascimento;
    $pessoa[$posicao+2] = $cpf;
    $pessoa[$posicao+3] = $celular;
    $pessoa[$posicao+4] = $endereco;
    $pessoa[$posicao+5] = $email;
    unlink("contatos.txt");
    rename("contatos2.txt","contatos.txt");
    $arquivo = fopen("contatos.txt", "a+");
    $contador = count($pessoa);
    $i = 0;
    while($i <= $contador - 1)
    {
        $gravar = $pessoa[$i]."|";
        fwrite($arquivo, $gravar);
        $i++;
    }
    fclose($arquivo2);
    fclose($arquivo);
    echo "<script>
            alert('Contato editado com sucesso!');
            window.location.href='index.php';
            </script>";
?>