<?php
	
	include_once('../controller/conexao.php');

	$sql = "SELECT * FROM cliente";

	$dados = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	
    <title>Listagem de Clientes</title>
	  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <style>
      
      body {
        background-color: rgb(253,228,199,1); 
        font-family: DM Serif Display;}

    </style>

</head>

    <body>

      <div class="container">

	  <h1 class="text-center">Listagem de Clientes</h1>

    <table class="table table-striped table-hover">

    <thead class="table-dark">

  	<tr>
    	
          <th>Nome Completo</th>
      		<th>CPF</th>
	      	<th>Telefone</th>
	      	<th>Email</th>
	      	<th>Senha</th>
	      	<th>Login</th>
	      	<th>Editar</th>
          <th>Excluir</th>
    </tr>

</thead>

<tbody>

            <?php
            while ($linha= mysqli_fetch_assoc($dados) ){
               $nome= $linha['nome'];
               $cpf= $linha['cpf'];
               $telefone= $linha['telefone'];
               $email= $linha['email'];
               $senha= $linha['senha'];
               $login= $linha['login']; 

              
               echo "<tr> 
                       <td>$nome</td> 
                       <td>$cpf</td>
                       <td>$telefone</td>
                       <td>$email</td>
                       <td>$senha</td>
                       <td>$login</td>
                       <td><a><i class='bi-pencil-square'></i></a></td>
                       <td><a><i class='bi-trash-fill'></i></a></td>
                       </tr>";
            }
            ?>

           </tbody>

        </table>
           <a class="btn btn-dark" href="javascript:history.back()">Voltar</a>
      </div>

        <script src="js/bootstrap.min.js"></script>
 
    </body>
  
  </html>