<?php 
    
    if (isset($_POST['submit'])) {

        include_once('conexao.php');
        
        $nome_fonercedor = ($_POST['nome_fonercedor']);
        $cnpj_fonercedor = ($_POST['cnpj_fonercedor']);
        $email_fonercedor = ($_POST['email_fonercedor']);
        $tel_fonercedor = ($_POST['tel_fonercedor']);
        $endereco_fonercedor = ($_POST['endereco_fonercedor']);
        $data_cadastro_fonercedor = ($_POST['data_cadastro_fonercedor']);
       

       $result = mysqli_query($mysqli, "INSERT INTO fornecedor(Nome,CNPJ,Email,Tell,Endereço,Data_de_Cadastro) VALUE (' $nome_fonercedor',' $cnpj_fonercedor','$email_fonercedor','$tel_fonercedor',' $endereco_fonercedor',' $data_cadastro_fonercedor')");

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
        <h1>Cadastro de Fonercedor</h1>
        <form id="form_cadastro_Usuacrio" action="cadastro_fonecedor.php"  method="post" class="p-3" >

            <div class="my-3">
                <label class="form-label">Nome</label>
                <input  class="form-control" type="text" name="nome_fonercedor" 
                id="nome_fonercedor" >
        
                <label class="form-label">CNPJ</label>
                <input  class="form-control" type="text" name="cnpj_fonercedor" 
                id="cnpj_fonercedor" >

                <label class="form-label">Email</label>
                <input class="form-control" type="email" name="email_fonercedor" id="email_fonercedor">
    
                <label class="form-label">Tell</label>
                <input class="form-control" type="tel" name="tel_fonercedor" id="tel_fonercedor">
    
    
                <label class="form-label">Endereço</label>
                <input class="form-control" type="text" name="endereco_fonercedor" id="endereco_fonercedor">

        
                <label class="form-label">Data de Cadastro</label>
                <input class="form-control" id="data_cadastro_fonercedor" type="date" name="data_cadastro_fonercedor">
            </div>
            
            <div class="my-3">
                <input class="btn btn-primary" type="submit" name="submit" value="cadastrar">
                <a href="Cadastros.php"><input type="button" class="btn btn-primary" value="Voltar"></a>
            </div>
    
        </form>
    </section>
    
</body>
</html>