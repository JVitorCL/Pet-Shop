<?php
    include_once('../controller/conexao.php');
    
    if ( isset( $_POST['submit'] ) ) {
        
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $raca = $_POST['raca'] ;
        $tamanho = $_POST['idade'];
        $peso = $_POST['peso'];
		$idade = $_POST['idade'];
    
        $sql = "INSERT INTO animal 
                    (nome, tipo, raca, tamanho, peso, idade)
                VALUES 
                    ('$nome', '$tipo', '$raca', '$tamanho', '$peso', '$idade')";

        $resultado = mysqli_query($conexao, $sql);

        if ($resultado) {
            mensagem("$nome cadastrado com sucesso!", "success");
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
    <link rel="stylesheet" href="css/style.css">
    <style>
    	body{
    		color: black;
        	font-family: DM Serif Display;
        	background-color: #d6b58c;
        	background-image: url("imagens/tela_pata2.png");
        	background-repeat: no-repeat;
        	background-size: 100%;
    	}
    	.container{
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

	<h1 style="text-align: center; margin-top: 10px; font-family: Arial; color: #292522" class="titulo"><strong>Cadastro de Animal</strong></h1>
<div class="container">
	<h2><u>Informações do Animal</u></h2>
	<div class="row">
	<div class="col">
	<div class="input-group mb-3">
	  <span class="input-group-text" id="nome_animal">Nome do Animal:</span>
	  <input name="nome" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Informe o Nome do Animal">
	</div>
	</div>

	<div class="col">
		<div class="input-group mb-3">
	  <span class="input-group-text" id="tipo_animal">Peso do Animal:</span>
	  <input name="peso" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Informe o Peso de Animal: Gramas/Quilos">
	</div>
	</div>
	</div>

	<div class="row">
		<div class="col">
			<div class="input-group mb-3">
	  <span class="input-group-text" id="raca_animal">Raça do Animal:</span>
	  <input name="raca" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Informe a Raça do Animal">
		</div>
		</div>
		<div class="col">
			<div class="input-group mb-3">
	  <span class="input-group-text" id="tamanho_animal">Idade do Animal:</span>
	  <input name="idade" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Informe a Idade do Animal: Meses/Anos">
		</div>
		</div>	
	</div>

	<div class="row">
			<div class="col">
				<div class="input-group mb-3">
	  <span class="input-group-text" id="peso_animal">Tipo do Animal:</span>
	  <input name="tipo" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Informe o Tipo do Animal"> 
		</div>
			</div>
			<div class="col"></div>
		</div>

		<div class="row">
				<div class="col">
				<div class="input-group mb-3">
	  <span class="input-group-text" id="idade_animal">Tamanho do Animal:</span>
	  <input name="tamanho" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Informe o Tamanho do Animal">
		</div>
			</div>
			<div class="col"></div>
		</div>

		<div class="row">
			<div class="col">
      		<input name="submit" type="submit" class="btn btn-dark" value="Salvar">
			</div>	
		</div>

</div>

<script src="js/bootstrap.min.js"></script>
</form>
</body>
</html>