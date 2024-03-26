<?php 
    
    if (isset($_POST['submit'])) {
        //icluindo arquivo de conexao
        include_once('conexao.php');
        
        // criando variaveis para adcionar ao banco 
        $nome_cliente = ($_POST['nome_cliente']);
        $serviço_assinatura = ($_POST['serviço']);
        $data_cadastro_assinatura = ($_POST['data_cadastro_assinatura']);
       
        //criando query para jogar variaveis criadas em linhas do BD

       $result = mysqli_query($mysqli, "INSERT INTO assinaturas(Nome,serviço,data_cadastro_assinatura) VALUE (' $nome_cliente','$serviço_assinatura ','$data_cadastro_assinatura')");


        //criando variavel para query no BD
       $select = "SELECT * FROM assinaturas  ORDER BY id DESC";

        // Fazendo uso da variavel de query
       $busca = $mysqli->query($select);

        //Tratando o array para ultilizar no HTML
       $bus = mysqli_fetch_array($busca);

       echo $bus['Nome'];
       echo $bus['serviço'];
       echo $bus['data_cadastro_assinatura'];

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
            <h2>Cadastro de Assinatura</h2>
            <form id="form_cadastro_assinatura" action="cadastro_assinatura.php"  method="post" class="p-3" >

                <div class="my-3">

                    <label class="form-label">Nome</label>
                    <input  class="form-control" type="text" name="nome_cliente" 
                    id="nome_cliente" >
            
                    <label class="form-label">Serviço</label>
                    <input class="form-control" id="serviço" type="text" name="serviço">


                    <label class="form-label">Data de Cadastro</label>
                    <input class="form-control" id="data_cadastro_serviço" type="date" name="data_cadastro_assinatura">
                </div>
                
                <div class="my-3">
                    <input class="btn btn-primary" type="submit" name="submit" value="cadastrar">
                    <a href="Cadastros.php"><input type="button" class="btn btn-primary" value="Voltar"></a>


                </div>
        
            </form>
        </section>
       
    </body>
</html>