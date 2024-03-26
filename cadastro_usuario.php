<?php 
    
    if (isset($_POST['submit'])) {

        include_once('conexao.php');
        
        $nome_usuario = ($_POST['nome_usuario']);
        $cpf_usuario = ($_POST['cpf_usuario']);
        $email_usuario = ($_POST['email_usuario']);
        $tel_usuario = ($_POST['tel_usuario']);
        $endereco_usuario = ($_POST['endereco_usuario']);
        $funcao_usuario = ($_POST['funcao_usuario']);
        $data_cadastro_usuario = ($_POST['data_cadastro_usuario']);
        $data_demissao_usuario = ($_POST['data_demissao_usuario']);

       

       $result = mysqli_query($mysqli, "INSERT INTO usuarios(Nome,CPF,Email,Tell,Endereço,Funçao,Cadastro_date,saida_date) VALUE ('$nome_usuario','$cpf_usuario',' $email_usuario',' $tel_usuario',' $endereco_usuario','$funcao_usuario','$data_cadastro_usuario','$data_demissao_usuario')");

      

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="stilo_cad.css">
    <link rel="stylesheet" href="style.css">
    

    
    <title>Cadastro</title>
</head>
<body>

    <section>
    
        <form id="form_cadastro_Usuario" action="cadastro_usuario.php"  method="post" class="p-3" >
        <h1>Cadastro de Usuario</h1>
            <div class="my-3">
                <label class="form-label">Nome</label>
                <input  class="form-control" type="text" name="nome_usuario" 
                id="nome_usuario" >
        
                <label class="form-label">CPF</label>
                <input  class="form-control" type="text" name="cpf_usuario" 
                id="cpf_usuario" >

                <label class="form-label">Email</label>
                <input class="form-control" type="email" name="email_usuario" id="email">
    
    
                <label class="form-label">Tell</label>
                <input class="form-control" type="tel" name="tel_usuario" id="tel_usuario">
    
    
                <label class="form-label">Endereço</label>
                <input class="form-control" type="text" name="endereco_usuario" id="endereco_usuario">

                <label class="form-label">Função</label>
                <input class="form-control" type="text" name="funcao_usuario" id="funcao_usuario">
                
    
                <label class="form-label">Data de Cadastro</label>
                <input class="form-control" id="data_cadastro_usuario" type="date" name="data_cadastro_usuario">

                <label class="form-label">Data de saida</label>
                <input class="form-control" id="data_demissao_usuario" type="date" name="data_demissao_usuario">
            </div>
            
            <div class="my-3">
                <input class="btn btn-primary" type="submit" name="submit" value="cadastrar">
                <a href="Cadastros.php"><input type="button" class="btn btn-primary" value="Voltar"></a>
            </div>
    
        </form>
    </section>
    
</body>
</html>