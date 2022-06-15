<?php
	
	include_once('../controller/conexao.php');

	$sql = "SELECT * FROM servico";

	$dados = mysqli_query($conexao, $sql);

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
	
    <title>Listagem de Serviços</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <style>
      
      body {
        background-color: rgb(253,228,199,1); 
        font-family: DM Serif Display;}

    </style>

</head>

    <body>

      <div class="container">

	  <h1 class="text-center">Listagem de Serviços</h1>

    <table class="table table-striped table-hover">

    <thead class="table-dark">

  	<tr>
    	
          	<th>Indicações</th>
      		<th>Disponibilidade</th>
	      	<th>Preço</th>
	      	<th>Desconto</th>
	      	<th>Editar</th>
          <th>Excluir</th>
    </tr>

</thead>

<tbody>
	         <?php
            while ($linha= mysqli_fetch_assoc($dados) ){
               $indicacao= $linha['indicacao'];
               $disponibilidade= $linha['disponibilidade'];
               $preco= $linha['preco'];
               $Desconto= $linha['desconto'];
              
               echo "<tr> 
                       <td>$indicacao</td> 
                       <td>$disponibilidade</td>
                       <td>R$ $preco</td>
                       <td>$Desconto %</td>
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