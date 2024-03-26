<?php 
    
    if (isset($_POST['submit'])) {

        include_once('conexao.php');
        
        $nome_serviço = ($_POST['nome_serviço']);
        $valor_serviço = ($_POST['valor_serviço']);
        $data_cadastro_serviço = ($_POST['data_cadastro_serviço']);
       

       $result = mysqli_query($mysqli, "INSERT INTO serviços(Nome,Valor,Data_de_Cadastro) VALUE ('$nome_serviço',' $valor_serviço','$data_cadastro_serviço')");

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
        <form id="form_cadastro_Usuacrio" action="cadastro_servico.php"  method="post" class="p-3" >
            <h1>Cadastro de Serviço</h1>
            <div class="my-3">
                <label class="form-label">Nome</label>
                <input  class="form-control" type="text" name="nome_serviço" 
                id="nome_usuario" >
        
                <label class="form-label">Valor</label>
                <input  class="form-control" type="text" name="valor_serviço" 
                id="nome_usuario" >

    
                <label class="form-label">Data de Cadastro</label>
                <input class="form-control" id="data_cadastro_serviço" type="date" name="data_cadastro_serviço">
            </div>
            
            <div class="my-3">
                <input class="btn btn-primary" type="submit" name="submit" value="cadastrar">
                <a href="Cadastros.php"><input type="button" class="btn btn-primary" value="Voltar"></a>
                
            </div>
    
        </form>
    </section>
    
</body>
</html>