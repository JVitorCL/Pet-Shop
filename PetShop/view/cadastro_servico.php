<?php
    include_once('../controller/conexao.php');
    
    if ( isset( $_POST['submit'] ) ) {
        
        $indicacao = $_POST['indicacao'];
        $preco = $_POST['preco'];
        $disponibilidade = $_POST['disponibilidade'] ;
        $desconto = $_POST['desconto'];
    
        $sql = "INSERT INTO servico 
                    (indicacao, preco, disponibilidade, desconto)
                VALUES 
                    ('$indicacao', '$preco', '$disponibilidade', '$desconto')";

        $resultado = mysqli_query($conexao, $sql);

        if ($resultado) {
            mensagem("$indicacao cadastrado com sucesso!", "success");
        } else {
            mensagem("não foi possível cadastrar $nome", 'danger');
        }


    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Um site criado para facilitar a comunicação entre cliente e petshop">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>

      body {
        color: black;
        font-family: DM Serif Display;
        background-color: #d6b58c;
        background-image: url("imagens/patinhas.png");
        background-repeat: no-repeat;
        background-size: 100%;
      }
      .container {
        background-color: #ADD8E6;
        background-color: rgba( 241, 241, 223, 0.8);
      }
      h2{
        color: black;
      }

    </style>

  <title>Pet Shop</title>
</head>
<body>

<form action="#" method="POST">

  <h1 style="text-align: center; margin-top: 10px; font-family: Arial; color: #292522"><strong>Cadastro de Serviços</strong></h1>

<div class="container">
  <div class="row"><!--Linha 1-->
  <div class="col">
  <div class="input-group mb-3">
    <span class="input-group-text" id="nome">Indicação por tipo do Animal:</span>
    <input name="indicacao" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>
  </div>

  <div class="col">
    <div class="input-group mb-3">
    <span class="input-group-text" id="login">Preço:</span>
    <input name="preco" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>
  </div>
  </div>

  <div class="row"><!--Linha 2-->
    <div class="col">
      <div class="input-group mb-3">
    <span class="input-group-text" id="cpf">Disponibilidade:</span>
    <input name="disponibilidade" type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
    <span class="input-group-text" id="senha">Desconto:</span>
    <input name="desconto" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    </div>  
  </div>

    <div class="row">
      <div class="col">
          <input name="submit" type="submit" class="btn btn-dark" value="Salvar">
      </div>  
    </div>




<script src="js/bootstrap.min.js"></script>
</form>
</body>
</html> 