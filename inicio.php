<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>HOME</title>
</head>
<body>

    
    <div id="TOPO">
      <img id="imagem" style="width: 200px; border-radius: 50%; padding: 15px;" src="imagens/imagem(icone)_animation.gif" alt="">
      <h1>BARBEARIA MACHADO</h1>
    </div>
    
    <form>
        <div class="my-3">
            <a href="informações.php"><input id="info" type="button" value="Informações"></a>

            <a href="Cadastros.php"><input id="cadastros" type="button" value="cadastros"></a>
            
        </div>

        <div id="tabela_clientes_dia">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Horario</th>
              <th scope="col">Telefone</th>
              <th scope="col"></th>

            </tr>
            <tr>
              <td>01</td>
              <td>Joao miguel</td>
              <td>18:00</td>
              <td>47 9 99588774</td>
              <td>
                <a href=""><img style="width: 15px;" src="imagens/editar.png" alt=""></a>
                <a href=""><img style="width: 15px;" src="imagens/lata-de-lixo.png" alt=""></a>
                <a href="concluir.php"><img style="width: 15px;" src="imagens/verificar.png" alt=""></a>
            
              </td>
            </tr>
            <tr>
              <td>02</td>
              <td>Pedro lucas</td>
              <td>19:00</td>
              <td>47 9 99588774</td>
              <td>
                <a href=""><img style="width: 15px;" src="imagens/editar.png" alt=""></a>
                <a href=""><img style="width: 15px;" src="imagens/lata-de-lixo.png" alt=""></a>
                <a href="concluir.php"><img style="width: 15px;" src="imagens/verificar.png" alt=""></a>
            
              </td>
            </tr>
            <tr>
              <td>03</td>
              <td>guilhgerme</td>
              <td>20:00</td>
              <td>47 9 99588774</td>
              <td>
                <a href=""><img style="width: 15px;" src="imagens/editar.png" alt=""></a>
                <a href=""><img style="width: 15px;" src="imagens/lata-de-lixo.png" alt=""></a>
                <a href="concluir.php"><img style="width: 15px;" src="imagens/verificar.png" alt=""></a>

            
              </td>
            </tr>
            <tr>
              <td>04</td>
              <td>iury barreto</td>
              <td>21:30</td>
              <td>47 9 99588774</td>
              <td>
                <a href=""><img style="width: 15px;" src="imagens/editar.png" alt=""></a>
                <a href=""><img style="width: 15px;" src="imagens/lata-de-lixo.png" alt=""></a>
                <a href="concluir.php"><img style="width: 15px;" src="imagens/verificar.png" alt=""></a>

            
              </td>
            </tr>
          </thead>
          <tbody>
          
          </tbody>
        </table>
      </div>

    </form>
</body>
</html>