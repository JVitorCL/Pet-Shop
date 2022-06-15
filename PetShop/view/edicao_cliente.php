<?php

  include_once('../controller/conexao.php');

    if ( isset($_POST['submit']) ) {
          
          $nome= $_POST['nome'];
          $login = $_POST['login'];
          $cpf = $_POST['cpf'];
          $senha = $_POST['senha'];
          $telefone = $_POST['telefone'];
          $email= $_POST['email'];

      
          $sql = "INSERT INTO cadastro_cliente 
                      (nome, login,cpf, senha,telefone,email)
                  VALUES 
                      ('$nome', '$login','$cpf', '$semha','$telefone','$email')";

          $resultado = mysqli_query($conexao, $sql);

          if ($resultado) {
              mensagem("$nome cadastrado com sucesso!", "success");
          } else {
              mensagem("não foi possivel realizar seu cadastro $nome", 'danger');
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
        background-image: url("/home/aluno/Imagens/patinhas.jpg");
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

<form action="#" method="POST ">

  <h1 style="text-align: center; margin-top: 10px"><strong>Cadastro de Clientes</strong></h1>

<div class="container">
  <h2><u>Informações Pessoais</u></h2>
  <div class="row"><!--Linha 1-->
  <div class="col">
  <div class="input-group mb-3">
    <span class="input-group-text" id="nome">Nome Completo:</span>
    <input name="nome" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Informe seu Nome Completo">
  </div>
  </div>

  <div class="col">
    <div class="input-group mb-3">
    <span class="input-group-text" id="login">Login:</span>
    <input name="login" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder=" Insira seu Login ">
  </div>
  </div>
  </div>

  <div class="row"><!--Linha 2-->
    <div class="col">
      <div class="input-group mb-3">
    <span class="input-group-text" id="cpf">CPF:</span>
    <input name="cpf" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Informe seu CPF">
    </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
    <span class="input-group-text" id="senha">Senha:</span>
    <input name="senha" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Informe sua Senha">
    </div>
    </div>  
  </div>

  <div class="row"><!--Linha 3-->
      <div class="col">
        <div class="input-group mb-3">
    <span class="input-group-text" id="telefone">Telefone:</span>
    <input name="telefone" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Informe seu Número de Telefone">
    </div>
</div>
<div class="col"></div>
</div>
     <div class="row">
      <div class="col">
         <div class="input-group mb-3">
    <span class="input-group-text" id="email">Email:</span>
    <input name="email" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Informe seu Email: exemplo@gmail.com">
     </div>
 
      </div>
               <div class="col">
          
        </div>

    </div>

    <div class="row">
      <div class="col">
          <input name="submit" type="submit" class="btn btn-dark" value="Enviar">
      </div>  
    </div>




<script src="js/bootstrap.min.js"></script>
</form>
</body>
</html> 