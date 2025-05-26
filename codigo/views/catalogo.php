<?php

require_once __DIR__ .'/../services/Auth.php';

use Services\Auth;

$usuario = Auth::getUsuario();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CineHome - Catálogo</title>

   <!-- Importando Bootstrap e estilos personalizados -->
   <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <!-- Fav icon -->
   <link rel="shortcut icon" href="img/Logo-Streaming-Filmes-_1_.ico" type="image/x-icon">

  <!-- CSS interno -->
  <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet');
    * {
      font-family: 'Poppins', sans-serif;
      color: #fff !important;
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    select,
    ::picker(select) {
    appearance: base-select;
    }

    /* botões */
    .common-btn{
        background-color: #00000020;
        color: #fff;
    
        border-radius: 5px;
        padding: 0.5rem 1rem;
        max-width: fit-content;
        align-self: center;
    }
    .common-btn:hover{
        background-color: #fff;
        color: #000 !important;
    }
    .common-btn:active{
        background-color: #ddd !important;
        color: #000000 !important;
        border: 3px solid #ddd !important;
    }
    .common-btn:hover .bi, .common-btn:active .bi{
        color: #000 !important;
    }

    body {
      background-color: #313131;
    }
    
    .dropdown-menu{
        background-color: #313131;
    }
    .dropdown-menu .dropdown-item{
        background: none;
    }
    .dropdown-menu.custom-width {
        width: 10px;
    }
    .nav-color{
        background-color: #000000;
    }
    .nav-logo img{
        width: 75px;
        height: 75px;
    }
    .navbar-toggler {
        border:none;
    }
     .navbar-toggler:focus,
    .navbar-toggler:active {
        outline: none;
        box-shadow: none;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='white' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
    .carousel-item img {
      height: auto;
      max-height: 230px;
      width: 100%;
      max-width: 150px;
      object-fit: cover;
      border-radius: 10px;
    }
    .footer-logo img {
    width: 60px;
    height: 60px;
    }

    .carousel-item {
      padding: 0 1rem;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      border-radius: 20%;
    }

    .category-section {
      margin: 2rem 0;
    }

    .footer {
      background-color: #111;
      padding: 1rem;
      text-align: center;
      font-size: 0.9rem;
      color: #aaa;
    }

    h5 {
      margin-bottom: 1rem;
      font-size: 1.25rem;
    }

    .search-bar {
      max-width: 500px;
      margin: 1rem auto;
    }

    .form-control::placeholder {
      color: #aaa;
    }

   
    @media (max-width: 768px) {
 
    }

    footer{
      background-color: #585858;
    }
  </style>
</head>
<body>

<!-- Barra de navegação -->
  <nav class="navbar navbar-expand-lg nav-color p-3">
    <div class="container-fluid justify-content-center">
    <a href="home_adm.html" class="navbar-brand nav-logo mx-auto">
        <img src="../img/Logo Streaming Filmes.svg" alt="logo">
    </a>
    <button class="navbar-toggler text-white border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
        <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="catalogo.php">Catálogo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="template.php">Adicionar</a>
        </li>
        </ul>
        <!-- Menu -->
        <div class="dropdown nav-item ms-lg-auto w-100 w-lg-auto">
            <div class="d-flex justify-content-center justify-content-lg-end">
                <div class="dropdown">
                    <button class="btn common-btn dropdown-toggle w-100 text-center text-lg-end px-3"type="button"id="adminDropdown" data-bs-toggle="dropdown"aria-expanded="false">
                    <i class="bi bi-person-fill"></i> User
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end w-100 text-center text-lg-end"aria-labelledby="adminDropdown" style="min-width: unset;">
                    <li>
                        <a href="login.php" class="dropdown-item d-flex justify-content-between align-items-center px-3">
                        <span>Sair</span> <i class="bi bi-box-arrow-right ms-2"></i>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>
  </nav>

<!-- Barra de pesquisa -->
<div class="search-bar text-center mb-4">
  <form class="d-flex justify-content-center" role="search">
    <input
      class="form-control me-2 bg-dark border-0 text-white"
      type="search"
      placeholder="Buscar títulos..."
      aria-label="Buscar"
      style="max-width: 400px;"
    />
    <button class="btn btn-outline-dark" type="submit">
      <i class="bi bi-search"></i>
    </button>
  </form>
</div>


<!-- Seções de conteúdo -->
<div class="container">
  <!-- Filmes -->
  <div class="category-section">
    <h5 class="text-uppercase text-center">Filmes</h5>
    <div id="carouselFilmes" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-flex justify-content-center flex-wrap gap-3">
            <img src="img_catalogo/Ainda_Estou_Aqui_poster.jpg" class="img-fluid" alt="Ainda Estou Aqui">
            <img src="img_catalogo/bonequinha_de_luxo.jpg" class="img-fluid" alt="Bonequinha de Luxo">
            <img src="img_catalogo/Jurassic_Park_poster.jpg" class="img-fluid" alt="Jurassic Park">
            <img src="../img/vingadores.jpg" class="img-fluid" alt="Vingadores">
            <img src="img_catalogo/titanic.jpg" class="img-fluid" alt="Titanic">
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-flex justify-content-center flex-wrap gap-3">
            <img src="img_catalogo/matrix.jpg" class="img-fluid" alt="Matrix">
            <img src="img_catalogo/pantera_negra.jpg" class="img-fluid" alt="Pantera Negra">
            <img src="img_catalogo/coringa.jpg" class="img-fluid" alt="Coringa">
            <img src="img_catalogo/homem_aranha.jpg" class="img-fluid" alt="Homem-Aranha">
            <img src="img_catalogo/interestrelar.jpg" class="img-fluid" alt="Interestelar">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselFilmes" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselFilmes" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
  <br>

  <!-- Séries -->
  <div class="category-section">
    <h5 class="text-uppercase text-center">Séries</h5>
    <div id="carouselSeries" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-flex justify-content-center flex-wrap gap-3">
            <img src="img_catalogo/breaking_bad.jpg" class="img-fluid" alt="Breaking Bad">
            <img src="img_catalogo/stranger_things.jpg" class="img-fluid" alt="Stranger Things">
            <img src="img_catalogo/game_of_thrones.jpg" class="img-fluid" alt="Game of Thrones">
            <img src="img_catalogo/Dark.jpg" class="img-fluid" alt="Dark">
            <img src="img_catalogo/the_office.jpg" class="img-fluid" alt="The Office">
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-flex justify-content-center flex-wrap gap-3">
            <img src="img_catalogo/friends.jpg" class="img-fluid" alt="Friends">
            <img src="img_catalogo/sherlok.jpg" class="img-fluid" alt="Sherlock">
            <img src="img_catalogo/house.jpg" class="img-fluid" alt="House">
            <img src="img_catalogo/peaky_blinders.jpg" class="img-fluid" alt="Peaky Blinders">
            <img src="img_catalogo/the_witchar.jpg" class="img-fluid" alt="The Witcher">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselSeries" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselSeries" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
  <br>

  <!-- Novelas -->
  <div class="category-section">
    <h5 class="text-uppercase text-center">Novelas</h5>
    <div id="carouselNovelas" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-flex justify-content-center flex-wrap gap-3">
            <img src="img_catalogo/avenida_brasil.jpg" class="img-fluid" alt="Avenida Brasil">
            <img src="img_catalogo/heias_de_charme.jpg" class="img-fluid" alt="Cheias de Charme">
            <img src="img_catalogo/o_rei_do_gado.jpg" class="img-fluid" alt="O Rei do Gado">
            <img src="img_catalogo/amor-a-vida.jpg" class="img-fluid" alt="Amor à Vida">
            <img src="img_catalogo/caminho_das_indias.jpg" class="img-fluid" alt="Caminho das Índias">
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-flex justify-content-center flex-wrap gap-3">
            <img src="img_catalogo/por_amor.jpg" class="img-fluid" alt="Por Amor">
            <img src="img_catalogo/belissima.jpg" class="img-fluid" alt="Belíssima">
            <img src="img_catalogo/lacos_de_famili.jpg" class="img-fluid" alt="Laços de Família">
            <img src="img_catalogo/o_clone.jpg" class="img-fluid" alt="O Clone">
            <img src="img_catalogo/senhora_do_destino.jpg" class="img-fluid" alt="Senhora do Destino">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselNovelas" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselNovelas" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
  <br>

  <!-- Desenhos -->
  <div class="category-section">
    <h5 class="text-uppercase text-center">Desenhos</h5>
    <div id="carouselDesenhos" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-flex justify-content-center flex-wrap gap-3">
            <img src="img_catalogo/scooby_doo.jpg" class="img-fluid" alt="Scooby-Doo">
            <img src="img_catalogo/tom_e_jerry.jpg" class="img-fluid" alt="Tom e Jerry">
            <img src="../img/picapau.jpg" class="img-fluid" alt="Pica-Pau">
            <img src="img_catalogo/os_simpsons_jpg.webp" class="img-fluid" alt="Os Simpsons">
            <img src="img_catalogo/phineas_e_ferb.jpg" class="img-fluid" alt="Phineas e Ferb">
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-flex justify-content-center flex-wrap gap-3">
            <img src="img_catalogo/futurama.jpg" class="img-fluid" alt="Futurama">
            <img src="img_catalogo/steven_universe.jpg" class="img-fluid" alt="Steven Universe">
            <img src="img_catalogo/looney_tunes.jpg" class="img-fluid" alt="Looney Tunes">
            <img src="img_catalogo/ben_10.jpg" class="img-fluid" alt="Ben 10">
            <img src="img_catalogo/meninas_super_poderosas.jpg" class="img-fluid" alt="Meninas Superpoderosas">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselDesenhos" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselDesenhos" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</div>


<script>
  document.querySelector("form").addEventListener("submit", function (e) {
    e.preventDefault();
    const searchValue = e.target.querySelector("input").value.toLowerCase();
 
    document.querySelectorAll(".carousel-inner .carousel-item").forEach((item) => {
      const images = item.querySelectorAll("img");
      let hasMatch = false;
 
      images.forEach((img) => {
        const altText = img.alt.toLowerCase();
        const parent = img.parentElement;
 
        if (altText.includes(searchValue)) {
          img.style.display = "";
          hasMatch = true;
        } else {
          img.style.display = "none";
        }
      });
 
      item.style.display = hasMatch ? "block" : "none";
    });
  });
  </script>  

  <!-- Bootstrap 5 CSS via CDN -->

  <!-- Carrossel Bootstrap -->
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://via.placeholder.com/800x400?text=Slide+1" class="d-block w-100" alt="" />
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/800x400?text=Slide+2" class="d-block w-100" alt="" />
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/800x400?text=Slide+3" class="d-block w-100" alt="" />
      </div>
    </div>


  </div>

  <!-- Rodapé -->
<footer class="d-flex flex-column align-items-center justify-content-center">
  <div class="nav-logo"><img src="../img/Logo_streaming(2).png" alt="Logo"></div>
  <p class="lh-1"><strong>Entre em contato:</strong> contact@cinehome.com </p>
  <p class="lh-1" style="font-size: small;">©️2025, Cinehome.com | Direitos Reservados</p>
</footer>

  <!-- Bootstrap JS + Popper (necessário para carrossel funcionar) -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-T1VcjU0ZJGzF8dXW5KUUEt1yI79kSAjZYoM65e4rc4IsjRYw0Q+iZT+Nj3DZz1vz" crossorigin="anonymous"></script>

</body>
</html>