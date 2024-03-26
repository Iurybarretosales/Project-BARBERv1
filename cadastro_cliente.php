<?php 
    
    if (isset($_POST['submit'])) {
        //icluindo arquivo de conexao
        include_once('conexao.php');
        
        // criando variaveis para adcionar ao banco 
        $nome_cliente = ($_POST['nome_cliente']);
        $cpf_cliente = ($_POST['cpf_cliente']);
        $email_cliente = ($_POST['email_cliente']);
        $tel_cliente = ($_POST['tel_cliente']);
        $endereco_Cliente = ($_POST['endereco_Cliente']);
        $data_cadastro_cliente = ($_POST['data_cadastro_cliente']);
       
        //criando query para jogar variaveis criadas em linhas do BD
       $result = mysqli_query($mysqli, "INSERT INTO clientes(Nome,CPF,Email,Tell,Endereço,Data_de_Cadastro) VALUE (' $nome_cliente','$cpf_cliente',' $email_cliente',' $tel_cliente',' $endereco_Cliente',' $data_cadastro_cliente')");

        //criando variavel para query no BD
       $select = "SELECT * FROM clientes ORDER BY id DESC";

        // Fazendo uso da variavel de query
       $busca = $mysqli->query($select);

        //Tratando o array para ultilizar no HTML
       $bus = mysqli_fetch_array($busca);

       echo $bus['Nome'];
       echo $bus['CPF'];
       echo $bus['Email'];
       echo $bus['Endereço'];
       echo $bus['Data_de_Cadastro'];



    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>

    <section>
        <h2>Cadastro de cliente</h2>
        <form id="form_cadastro_cliente" action="cadastro_cliente.php"  method="post" class="p-3" >

            <div class="my-3">
                <label class="form-label">Nome</label>
                <input  class="form-control" type="text" name="nome_cliente" 
                id="nome_cliente" >
        
                <label class="form-label">CPF</label>
                <input  class="form-control" type="text" name="cpf_cliente" 
                id="cpf_cliente" >

                <label class="form-label">Email</label>
                <input class="form-control" type="email" name="email_cliente" id="email">
    
    
                <label class="form-label">Tell</label>
                <input class="form-control" type="tel" name="tel_cliente" id="tel_cliente">
    
    
                <label class="form-label">Endereço</label>
                <input class="form-control" type="text" name="endereco_Cliente" id="endereco_Cliente">
    
                <label class="form-label">Data de Cadastro</label>
                <input class="form-control" id="data_cadastro_cliente" type="date" name="data_cadastro_cliente">
            </div>
            
            <div class="my-3">
                <input class="btn btn-primary" type="submit" name="submit" value="cadastrar">
                <a href="Cadastros.php"><input type="button" class="btn btn-primary" value="Voltar"></a>



            </div>
    
        </form>
    </section>
    
</body>
</html>