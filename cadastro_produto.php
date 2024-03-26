<?php 
    
    if (isset($_POST['submit'])) {

        include_once('conexao.php');
        
        $produto = ($_POST['nome_produto']);
        $codigo_prod = ($_POST['codigo_produto']);
        $fornecedor = ($_POST['Fornecedor_produto']);
        $valor_prod = ($_POST['Valor_produto']);
        $data_cad_prod = ($_POST['data_cadastro_produto']);

       $result = mysqli_query($mysqli, "INSERT INTO produtos(Nome,Codigo,Fornecedor,Valor,Data_de_Cadastro) VALUE ('$produto', '$codigo_prod','$fornecedor','$valor_prod','$data_cad_prod')");

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
        <h1>Cadastro de Usuario</h1>
        <form id="form_cadastro_Usuario" action="cadastro_produto.php"  method="post" class="p-3" >

            <div class="my-3">
                <label class="form-label">Nome</label>
                <input  class="form-control" type="text" name="nome_produto" 
                id="nome_produto" >
        
                <label class="form-label">CODIGO</label>
                <input  class="form-control" type="text" name="codigo_produto" 
                id="codigo_produto" >

                <label class="form-label">Fornecedor</label>
                <input class="form-control" type="text" name="Fornecedor_produto" id="Fornecedor_produto">

                <label class="form-label">Valor</label>
                <input class="form-control" type="text" name="Valor_produto" id="Valor_produto">
    
                <label class="form-label">Data de Cadastro</label>
                <input class="form-control" id="data_cadastro_produto" type="date" name="data_cadastro_produto">
            </div>
            
            <div class="my-3">
                <input class="btn btn-primary" type="submit" name="submit" value="cadastrar">
                <a href="Cadastros.php"><input type="button" class="btn btn-primary" value="Voltar"></a>
            </div>
    
        </form>
    </section>
    
</body>
</html>