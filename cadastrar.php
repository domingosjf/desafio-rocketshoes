<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RocketShoes</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;500;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

	</head>
	<body>
		<a href="listar.php">Listar</a>
		<h1>RocketShoes Cadastrar</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo "<p>".$_SESSION['msg']."</p>";
			unset($_SESSION['msg']);
		}
		?>
		
		<form method="POST" action="proc_cadastrar.php">
			<label>
			<span class="text-danger">*</span> Nome</label>
			<input type="text" name="cliente"><br><br>
			
			<label>Produto: </label>
			<input type="text" name="produto"><br><br>
			
			
			<label>Quant: </label>
			<input type="text" name="qnt_produto"><br><br>
			
			
			<input type="submit" value="Cadastrar">
			
		</form>
		
			<div class="container bg-primary">
			<footer class="footer bg-primary">
				<div class="container text-center">
					© copyright Domingos Filho 2022
				</div>
			</footer>
		</div>
					
		
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
		
		
	</body>
</html>