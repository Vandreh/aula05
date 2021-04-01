<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP UTD Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>    
    <div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
                <h3>Cadastro de Usuario</h3><hr>
                <form action="cadastraUsuario.php" method="GET">
                    <label>Nome do Usuario</label><br>
                    <input type="text" class="form-control" name="nome" placeholder="Nome"><br><br>

                    <label>Telefone</label><br>
                    <input type="text" class="form-control" name="telefone" placeholder="telefone"><br><br>

                    <label>Endereço</label><br>
                    <input type="text" class="form-control" name="endereco" placeholder="endereço"><br><br>

                    <label>CPF</label><br>
                    <input type="text" class="form-control" name="cpf" placeholder="cpf"><br><br>

                    <button class="btn btn-primary">Cadastrar Usuario</button>
                </form>
            </div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>

<?php
    $dados = $_GET;
    $dados = implode(" - ", $dados);
    $arquivo = fopen("usuarios.txt", "a+");
    fwrite($arquivo, $dados."\n");
    fclose($arquivo);
    header("location: listaUsuarios.php");
?>



<?php
    $produtos = file("usuarios.txt");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP UTD Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>    
    <div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
                <hr>
                <h3>Lista de Usuarios</h3><hr>
                <table class="table">
                    <thead>
                        <th>Nome do Usuario</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>CPF</th>
                    </thead>
                    <tbody>
                        <?php
                            foreach($usuarios as $usuario){
                                $dado = explode(" - ", $usuario);      
                        ?>
                            <tr>
                                <td><?=$dado[0];?></td>
                                <td><?=$dado[1];?></td>
                                <td><?=$dado[2];?></td>
                                <td><?=$dado[3];?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="manipulacaoArquivo.php" class="btn btn-primary">Cadastrar novo Usuario</a>
            </div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
