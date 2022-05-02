
<?php
session_start();
include_once("conexao.php");
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/personalizado.css" />
    <title>RocketShoes</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;500;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">


	</head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <div class="container">
          <a class="navbar-brand" href="index.html">Rocket<span></span>Shoes</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">HOMEM</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">MULHER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CRIANÇA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CUSTOMIZAR</a>
              </li>
              <li>
                <div class="search-container">
                  <form class="search-form">
                    <input
                      type="text"
                      id="search-bar"
                      placeholder="Pesquisar"
                    />
                    <a href="#">
                      <img class="search-icon" src="assets/icon-search.svg" />
                    </a>
                  </form>
                </div>
              </li>
              <li><img src="assets/icon-bag.svg" alt="" /></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              class="first-slide img-fluid"
              src="assets/A-tenis-1-galeria.svg"
              alt="Primeiro conteúdo"
            />
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 class="d-none d-md-block">
                  Tênis Esportivo Para Corrida Top
                </h1>
                <p class="d-none d-md-block">
                  Esse tênis tem o intuito de te deixar ainda mais fitness,
                  focado, e musculoso.
                </p>
				
				
                <p class="d-none d-md-block">
                  <a class="btn btn-lg btn-warning" href="#exampleModal" role="button"
                >COMPRAR</a
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img
              class="second-slide img-fluid"
              src="assets/A-tenis-1-galeria.svg"
              alt="Segundo conteúdo"
            />
            <div class="container">
              <div class="carousel-caption">
                <h1 class="d-none d-md-block">
                  Tênis Esportivo Para Corrida Top.
                </h1>
                <p class="d-none d-md-block">
                  Esse tênis tem o intuito de te deixar ainda mais fitness,
                  focado, e musculoso.
                </p>
                <p class="d-none d-md-block">
                  <a class="btn btn-lg btn-warning" href="#exampleModal" role="button"
                    >COMPRAR</a
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img
              class="third-slide img-fluid"
              src="assets/A-tenis-1-galeria.svg"
              alt="Terceiro conteúdo"
            />
            <div class="container">
              <div class="carousel-caption text-right">
                <h1 class="d-none d-md-block">
                  Tênis Esportivo Para Corrida Top.
                </h1>
                <p class="d-none d-md-block">
                  Esse tênis tem o intuito de te deixar ainda mais fitness,
                  focado, e musculoso.
                </p>
                <p class="d-none d-md-block">
                  <a class="btn btn-lg btn-warning" href="cadastrar.php" role="button"
                    >COMPRAR</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#myCarousel"
          role="button"
          data-slide="prev"
        >
          <span
            class="carousel-control-prev-icon bg-warning"
            aria-hidden="true"
          ></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#myCarousel"
          role="button"
          data-slide="next"
        >
          <span
            class="carousel-control-next-icon bg-danger"
            aria-hidden="true"
          ></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
			<div>
       
			<div class="jumbotron servicos">
				<div class="container">
					<h2 class="display-4 text-center" style="margin-bottom: 40px;">Tênis</h2>
					<div class="card-deck card-servicos">
						<div class="card text-center">
							<div class="icon-row tamanh-icone">
								<span class="step size-96 text-primary">
									<i class="icon ion-ios-camera-outline"></i>
								</span>
							</div>
							<div class="card-body">
								<h3 class="card-title">Tênis Esportivo Para Corrida Top</h3>
								<p class="card-text lead">Esse tênis tem o intuito de te deixar 
									ainda mais fitness, focado, e musculoso.</p>
									<h5>R$ 1.000,00</h5>
									<img class="card-img-top" src="assets/tenis-1-galeria.png" alt="Imagem de capa do card">
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
										COMPRAR
									</button> 
									
							</div>
						</div>
						<div class="card text-center">
							<div class="icon-row tamanh-icone">
								<span class="step size-96 text-primary">
									<i class="icon ion-ios-film-outline"></i>
								</span>
							</div>
							<div class="card-body">
								<h3 class="card-title">Tênis Esportivo Para Corrida Top</h3>
								<p class="card-text lead">Esse tênis tem o intuito de te deixar 
									ainda mais fitness, focado, e musculoso.</p>
									<h5>R$ 1.000,00</h5>
									<img class="card-img-top" src="assets/tenis-2-galeria.png" alt="Imagem de capa do card"> 
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
										COMPRAR
									</button>
									
							</div>
						</div>
						<div class="card text-center">
							<div class="icon-row tamanh-icone ">
								<span class="step size-96 text-primary">
									<i class="icon ion-ios-videocam-outline"></i>
								</span>
							</div>
							<div class="card-body">
								<h3 class="card-title">Tênis Esportivo Para Corrida Top</h3>
								<p class="card-text lead">Esse tênis tem o intuito de te deixar 
									ainda mais fitness, focado, e musculoso.</p>
									<h5>R$ 1.000,00</h5>
									<img class="card-img-top" src="assets/tenis-3-galeria.png" alt="Imagem de capa do card"> 
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
										COMPRAR
									</button>
									
							</div>
						</div>
					</div>
				</div>
			</div>
		
		</main>
			<!--MODAL-->

			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog  modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Tênis Esportivo Para Corrida Top</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
						
							<p>Esse tênis tem o intuito de te deixar 
								ainda mais fitness, focado, e musculoso.</p>
								<h5>R$ 1.000,00</h5>
				<div>					
			<form method="POST" action="proc_cadastrar.php">
			<label>Nome: </label>
			<input type="text" name="cliente"><br><br>
			
			<label>Produto: </label>
			<input type="text" name="produto"><br><br>
			
			<label>Quant: </label>
			<input type="text" name="qnt_produto"><br><br>
			
			
			<input type="submit" class="btn btn-primary" value="Confirmar">
				
				
			</form>
						
						</div>
			
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				
						</div>	
					</div>
				</div>
			</div>
		<!--/MODAL-->
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
