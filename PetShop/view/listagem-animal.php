<?php
	
	include_once('../controller/conexao.php');

	$sql = "SELECT * FROM animal";

	$dados = mysqli_query($conexao, $sql);
  
?>

<!DOCTYPE html>
<html>
  <head>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Listagem de Animais</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  </head>
  <body style="background-color:rgba(253, 228, 199, 1)">
    <div class="container">
      <h1 class="text-center">Listagem de Animais</h1>

      <table class="table table-striped table-hover">
        <thead class="table-dark">
          <tr>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Raça</th>
            <th>Tamanho</th>
            <th>Peso</th>
            <th>Idade</th>
            <th>Editar</th>
            <th>Excluir</th>
          </tr>
        </thead>

        <tbody>
          <?php
            while ($linha= mysqli_fetch_assoc($dados) ){
               $nome= $linha['nome'];
               $tipo= $linha['tipo'];
               $raca= $linha['raca'];
               $tamanho= $linha['tamanho'];
               $peso= $linha['peso'];
               $idade= $linha['idade'];

              
               echo "<tr> 
                       <td>$nome</td> 
                       <td>$tipo</td>
                       <td>$raca</td>
                       <td>$tamanho</td>
                       <td>$peso</td>
                       <td>$idade</td>
                       <td><a><i class='bi-trash-fill'></i></a></td>
                       <td><a><i class='bi-trash-fill'></i></a></td>
                    </tr>";
            }
          ?>
     
        </tbody>
      </table>
         <a class="btn btn-dark" href="javascript:history.back()">Voltar</a>
    </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>