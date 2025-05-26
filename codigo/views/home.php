<?php

require_once __DIR__ .'/../services/Auth.php';

use Services\Auth;

$usuario = Auth::getUsuario();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importando Bootstrap e estilos personalizados -->
   <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Fav icon -->
  <link rel="shortcut icon" href="img/Logo-Streaming-Filmes-_1_.ico" type="image/x-icon">
  <!-- Estilo interno -->
  <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet');
    * {
      font-family: 'Poppins', sans-serif;
      color: #fff !important;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #313131;
    }

    .common-container {
      background-color: #00000020 !important;
      border: 3px solid #fff;
      border-radius: 5px;
    }

    .borderless {
      border: none;
    }

    .poster-img {
      width: 100%;
      max-width: 240px;
      height: 360px;
      object-fit: cover;
      border-radius: 8px;
    }

     .footer {
      background-color: #585858;
      padding: 1rem;
      text-align: center;
      font-size: 0.9rem;
      color: #aaa;
    }
        footer{
      background-color: #585858;
    }

    .nav-logo img {
      width: 75px;
      height: 75px;
    }

    .nav-color {
      background-color: #000;
    }

    .limite {
      color: #D22424 !important;
      text-decoration: underline dashed;
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

    .catalogo-texto {
      font-size: 0.95rem;
      text-align: left;
    }

    /* Botões minimalistas do carrossel */
    .carousel-control-prev,
    .carousel-control-next {
      width: 30px;
      height: 30px;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      padding: 0;
      opacity: 0.8;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: transparent;
      border: solid white;
      border-width: 0 4px 4px 0;
      width: 16px;
      height: 16px;
    }

    .carousel-control-prev-icon {
      transform: rotate(135deg);
    }

    .carousel-control-next-icon {
      transform: rotate(-45deg);
    }

    /* Redução do tamanho das imagens do carrossel de banners */
    #banners-container .carousel-inner img {
      max-height: 580px;
      max-width: 95%;
      margin: 0 auto;
      object-fit: cover;
      border-radius: 8px;
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
    .custom-footer {
    background-color: #585858;
    color: #fff;
    text-align: center;
    }

    .footer-logo img {
    width: 60px;
    height: 60px;
    }

    @media (max-width: 768px) {
      .poster-img {
        height: 250px;
      }

      .catalogo-texto {
        text-align: center;
        font-size: 0.85rem;
        padding: 0 1rem;
      }

      #banners-container .carousel-inner img {
        max-height: 200px;
      }
      /* Responsividade */

        .footer-logo img {
            width: 50px;
            height: 50px;
        }

        .custom-footer p {
            font-size: 0.85rem;
        }
    }
  </style>
  <title>CineHome</title>
</head>

<body>
     <!-- Barra de navegação -->

   


  <!-- Título e subtítulo -->
  <div class="container my-5 text-center">
    <div class="card common-container borderless p-4">
      <div class="card-header fs-3 fw-bold">Bem-vindo de volta</div>
      <div class="card-body">
        <p class="card-text fs-5">Veja a recomendação de filme e série da semana</p>
      </div>
    </div>
  </div>

  <!-- Carrossel de Banners -->
  <div class="container my-5" id="banners-container">
    <div id="slider" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img_home/conclave.jpg" class="d-block w-100 img-fluid" alt="Conclave" />
        </div>
        <div class="carousel-item">
          <img src="../img_home/peaky-blinders2.jpeg" class="d-block w-100 img-fluid" alt="Vale Tudo" />
        </div>
        <div class="carousel-item">
          <img src="../img/greysanatomy (1).jpg" class="d-block w-100 img-fluid" alt="Peaky Blinders" />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </div>

  <!-- Carrossel de Assinaturas -->
  <div class="container mb-4">
    <div class="card-header fs-5 fw-semibold">Minhas Assinaturas</div>
    <div id="carrosselAssinaturas" class="carousel slide mt-3" data-bs-ride="carousel">
      <div class="carousel-inner text-center">
        <!-- Página 1 -->
        <div class="carousel-item active">
          <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-3 d-flex justify-content-center">
              <img src="../img_home/you.jpg" class="poster-img" alt="Avenida Brasil">
            </div>
            <div class="col-6 col-md-3 mb-3 d-flex justify-content-center">
              <img src="../img_home/wicked.jpg" class="poster-img" alt="Vale Tudo">
            </div>
            <div class="col-6 col-md-3 mb-3 d-flex justify-content-center">
              <img src="../img_home/pantanal.png" class="poster-img" alt="Peaky Blinders">
            </div>
            <div class="col-6 col-md-3 mb-3 d-flex justify-content-center">
              <img src="../img_home/Breaking_bad.jpg" class="poster-img" alt="Liga da Justiça">
            </div>
          </div>
        </div>
        <!-- Página 2 -->
        <div class="carousel-item">
          <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-3 d-flex justify-content-center">
              <img src="../img_home/pecadores.jpg" class="poster-img" alt="Como Treinar seu Dragão 2">
            </div>
            <div class="col-6 col-md-3 mb-3 d-flex justify-content-center">
              <img src="../img_home/stranger_things.jpg" class="poster-img" alt="Chiquititas">
            </div>
            <div class="col-6 col-md-3 mb-3 d-flex justify-content-center">
              <img src="../img_home/outroladodoparaiso.jpg" class="poster-img" alt="Cobra Kai">
            </div>
            <div class="col-6 col-md-3 mb-3 d-flex justify-content-center">
              <img src="../img_home/simpsons.jpg" class="poster-img" alt="Bosko Looney Tunes">
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carrosselAssinaturas" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carrosselAssinaturas" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>

  <!-- Texto Final -->
  <div class="container my-5">
    <p class="fs-6 catalogo-texto">
      Já terminou de assistir ou quer ver mais filmes e séries?<br />
      Veja o nosso catálogo por mais filmes e séries!<br />
      <a href="catalogo.php" class="text-decoration-underline text-info fw-semibold">Clique aqui</a> para ir ao catálogo.
    </p>
  </div>

  <!-- Rodapé -->
  <footer class="d-flex flex-column align-items-center justify-content-center">
    <div class="nav-logo"><img src="img/Logo_streaming(2).png" alt="Logo"></div>
    <p class="lh-1"><strong>Entre em contato:</strong> contact@cinehome.com </p>
    <p class="lh-1" style="font-size: small;">©️2025, Cinehome.com | Direitos Reservados</p>
  </footer>

  <!-- JS do Bootstrap -->
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>