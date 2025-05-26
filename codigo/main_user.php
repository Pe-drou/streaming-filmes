<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importando Bootstrap e estilos personalizados -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="img/Logo-Streaming-Filmes-_1_.ico" type="image/x-icon">
    <!-- CSS INTERNO -->
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet');
    *{
        font-family: 'Poppins', sans-serif;
        color: #fff !important;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    /* fonte para títulos */
    .title-font{
        font-family: 'Poppins', sans-serif;
    }

    /* links */
    a{
        color: #eee ;
        text-decoration: none;
    }
    a:hover{
        text-decoration: underline;
    }

    select,
    ::picker(select) {
    appearance: base-select;
    }

    /* containers */
    .common-container{
        background-color: #C60A26 !important;
        border-radius: 5px;
        max-width: 800px;
    }
    .borderless{
        border: none;
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


    .common-input:focus{
        background-color: #ffffffbb;
        color: #FDFCF7;
        box-shadow: none;
        border-left: 4px solid #F31111;
        border-bottom: 4px solid #F31111;
    }
    option.common-input{
        background-color: #313131;
    }

    body{
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
    .cover{
        background: linear-gradient(90deg, #000000 0%, #00000000 50%), url(img/foto_filmes.png) no-repeat;
        background-size: cover;
        
    }
    .log-container{
        width: 30vw;
        height: 70vh;
    }
    .log-container h1{
        width: 100%;
        text-align: center;
        margin-top: .5em;
    }
    .log-form{
        height: 80%;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
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
    .listagem{
        background-color: #00000000 !important;
    }
    .listagem thead{
        border: 1px solid #fff;
        border-radius: 5px 5px 0 0;
    }
    .listagem tbody{
        border: 1px solid #fff;
        border-radius: 0 0 5px 5px;
    }
    .listagem th, .listagem td{
        background-color: #ffffff10;
    }
    .days-input{
        color: #000 !important; 
    }

    .limite{
        color: #D22424 !important;
        text-decoration: underline dashed;
    }
    @media (max-width: 767px){
        .fmsr-poster{
            max-width: 400px;
            height: 200px;
            margin-top: 0.5em;
        }
        .borderless-sm{
            border: none;
        }
        .log-container{
            width: 80vw;
            height: 80vh;
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
    <nav class="navbar navbar-expand-lg nav-color p-3">
        <div class="container-fluid justify-content-center">
        <a href="home_adm.html" class="navbar-brand nav-logo mx-auto">
            <img src="../codigo/img/Logo Streaming Filmes.svg" alt="Logo">
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
                <a class="nav-link" href="main_adm.php">Adicionar</a>
            </li>
            </ul>
            <!-- Menu -->
            <div class="dropdown nav-item ms-lg-auto w-100 w-lg-auto">
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <div class="dropdown">
                        <button
                        class="btn common-btn dropdown-toggle w-100 text-center text-lg-end px-3"
                        type="button"
                        id="adminDropdown"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        >
                        <i class="bi bi-person-fill"></i> User
                        </button>
                        <ul
                        class="dropdown-menu dropdown-menu-end w-100 text-center text-lg-end"
                        aria-labelledby="adminDropdown"
                        style="min-width: unset;"
                        >
                        <li>
                            <a
                            href="login.php"
                            class="dropdown-item d-flex justify-content-between align-items-center px-3"
                            >
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
    

    <!-- Título -->
    <div class="text-center my-4">
        <h2 class="title-font">CineHome</h2>
    </div>

<!-- Container principal -->
<div class="container mb-4">

    <div class="row justify-content-center align-items-start gy-4 gx-4">
      <!-- Formulário Calcular Preço -->
      <div class="col-md-6 col-lg-5 d-flex justify-content-center">
        <div class="p-3 common-container text-white w-100">
          <h4 class="text-center">Calcular Preço</h4>
          <form method="post" class="needs-validation mt-3" novalidate>
  
            <!-- Tipo -->
            <div class="mb-3">
              <label for="tipoPreco" class="form-label">Tipo</label>
              <select name="tipo" id="tipoPreco" class="form-select common-input" required>
                <option value="" selected disabled>Selecione</option>
                <option value="filme">Filme</option>
                <option value="serie">Série</option>
                <option value="novela">Novela</option>
                <option value="documentario">Documentário</option>
              </select>
            </div>
  
            <!-- Dias -->
            <div class="mb-3">
              <label for="dias" class="form-label">Tempo em dias</label>
              <input type="number" name="dias" id="dias" class="form-control common-input" min="1" required>
            </div>
  
            <button class="btn common-btn w-100 mt-2" type="submit">Calcular</button>
          </form>
        </div>
      </div>
  
    </div> 
  
    <!-- Cards-->
    <div class="row justify-content-center align-items-start gy-4 gx-4 mt-5">
  
      <!-- Itens cadastrados -->
      <div class="col-md-6 col-lg-5 d-flex justify-content-center">
        <div class="card bg-dark text-white w-100" style="max-width: 400px;">
          <img src="img/comotreinarseudragao2.jpg" class="card-img-top fmsr-poster" alt="Poster">
          <div class="card-body text-center">
            <h4 class="card-title">Como Treinar Seu Dragão</h4>
            <p>Filme | Animação | Aventura</p>
      
            <div class="d-flex gap-2 justify-content-center">
              <button class="btn btn-success btn-sm">Disponível</button>
              <!-- Botão que aciona o modal -->
              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDragao">
                Veja Mais
              </button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Modal -->
      <div class="modal fade" id="modalDragao" tabindex="-1" aria-labelledby="modalDragaoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content bg-dark text-white">
            <div class="modal-header">
              <h5 class="modal-title" id="modalDragaoLabel">Como Treinar Seu Dragão</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
              <p><strong>Sinopse:</strong> Soluço é um jovem viking que não tem capacidade para lutar contra os dragões, como é a tradição local. Sua vida muda quando ele ajuda um dragão que lhe mostra toda a verdade. Juntos, eles tentam provar que dragões e humanos podem ser amigos.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-5 d-flex justify-content-center">
        <div class="card bg-dark text-white w-100" style="max-width: 400px;">
          <img src="img/dexter.jpg" class="card-img-top fmsr-poster" alt="Poster">
          <div class="card-body text-center">
            <h4 class="card-title">Dexter</h4>
            <p>Série | Drama</p>
      
            <div class="d-flex gap-2 justify-content-center">
              <button class="btn btn-success btn-sm">Disponível</button>
              <!-- Botão que aciona o modal -->
              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDexter">
                Veja Mais
              </button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Modal -->
      <div class="modal fade" id="modalDexter" tabindex="-1" aria-labelledby="modalDexterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content bg-dark text-white">
            <div class="modal-header">
              <h5 class="modal-title" id="modalDexterLabel">Dexter</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
              <p><strong>Sinopse:</strong> Dexter é uma série de televisão americana de drama criminal e suspense que acompanha Dexter Morgan, um analista forense de padrões de sangue que também é um assassino em série. Dexter utiliza seus conhecimentos forenses para caçar e matar outros criminosos que a polícia não conseguiu prender. A série explora a dualidade de Dexter, um homem aparentemente normal com uma vida dupla como assassino. </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-5 d-flex justify-content-center">
        <div class="card bg-dark text-white w-100" style="max-width: 400px;">
          <img src="img/aindaestouaqui.jpg" class="card-img-top fmsr-poster" alt="Poster">
          <div class="card-body text-center">
            <h4 class="card-title">Ainda Estou Aqui</h4>
            <p>Filme | Drama</p>
      
            <div class="d-flex gap-2 justify-content-center">
                <button class="btn btn-warning btn-sm" disabled>Indisponível</button>
              <!-- Botão que aciona o modal -->
              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalAindaEstouAqui">
                Veja Mais
              </button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Modal -->
      <div class="modal fade" id="modalAindaEstouAqui" tabindex="-1" aria-labelledby="modalAindaEstouAquiLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content bg-dark text-white">
            <div class="modal-header">
              <h5 class="modal-title" id="modalAindaEstouAquiLabel">Ainda Estou Aqui</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
              <p><strong>Sinopse:</strong> No início da década de 1970, o Brasil enfrenta o endurecimento da ditadura militar. No Rio de Janeiro, a família Paiva - Rubens, Eunice e seus cinco filhos - vive à beira da praia em uma casa de portas abertas para os amigos. Um dia, Rubens Paiva é levado por militares à paisana e desaparece. Eunice - cuja busca pela verdade sobre o destino de seu marido se estenderia por décadas - é obrigada a se reinventar e traçar um novo futuro para si e seus filhos.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-5 d-flex justify-content-center">
        <div class="card bg-dark text-white w-100" style="max-width: 400px;">
          <img src="img/valetudo.jpg" class="card-img-top fmsr-poster" alt="Poster">
          <div class="card-body text-center">
            <h4 class="card-title">Vale Tudo</h4>
            <p>Novela | Drama</p>
      
            <div class="d-flex gap-2 justify-content-center">
              <button class="btn btn-success btn-sm">Disponível</button>
              <!-- Botão que aciona o modal -->
              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalValeTudo">
                Veja Mais
              </button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Modal -->
      <div class="modal fade" id="modalValeTudo" tabindex="-1" aria-labelledby="modalValeTudoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content bg-dark text-white">
            <div class="modal-header">
              <h5 class="modal-title" id="modalValeTudoLabel">Vale Tudo</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
              <p><strong>Sinopse:</strong> Conta a história de Raquel Accioli, uma mulher honesta e trabalhadora, e de sua filha Maria de Fátima, uma jovem ambiciosa e sem escrúpulos, disposta a tudo para alcançar seus objetivos, incluindo o dinheiro. A trama explora o contraste entre a honestidade da mãe e a ambição da filha, que se utiliza de golpes e traições para alcançar o sucesso. </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-5 d-flex justify-content-center">
        <div class="card bg-dark text-white w-100" style="max-width: 400px;">
          <img src="img/peakyblinders.png" class="card-img-top fmsr-poster" alt="Poster">
          <div class="card-body text-center">
            <h4 class="card-title">Peaky Blinders</h4>
            <p>Série | Drama | Ação</p>
      
            <div class="d-flex gap-2 justify-content-center">
                <button class="btn btn-warning btn-sm" disabled>Indisponível</button>
              <!-- Botão que aciona o modal -->
              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalPeakyBlinders">
                Veja Mais
              </button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Modal -->
      <div class="modal fade" id="modalPeakyBlinders" tabindex="-1" aria-labelledby="modalPeakyBlindersLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content bg-dark text-white">
            <div class="modal-header">
              <h5 class="modal-title" id="modalPeakyBlindersLabel">Peaky Blinders</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
              <p><strong>Sinopse:</strong> É uma série britânica de ficção histórica que acompanha a gangue Peaky Blinders, uma organização criminosa de origem cigana que domina Birmingham após a Primeira Guerra Mundial. A história foca na ambição de Thomas "Tommy" Shelby, o líder da gangue, e seus esforços para expandir seu império. </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-5 d-flex justify-content-center">
        <div class="card bg-dark text-white w-100" style="max-width: 400px;">
          <img src="img/greysanatomy (1).jpg" class="card-img-top fmsr-poster" alt="Poster">
          <div class="card-body text-center">
            <h4 class="card-title">Greys Anatomy</h4>
            <p>Série | Drama </p>
      
            <div class="d-flex gap-2 justify-content-center">
                <button class="btn btn-warning btn-sm" disabled>Indisponível</button>
              <!-- Botão que aciona o modal -->
              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalGreysAnatomy">
                Veja Mais
              </button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Modal -->
      <div class="modal fade" id="modalGreysAnatomy" tabindex="-1" aria-labelledby="modalGreysAnatomyLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content bg-dark text-white">
            <div class="modal-header">
              <h5 class="modal-title" id="modalGreysAnatomyLabel">Greys Anatomy</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
              <p><strong>Sinopse:</strong> É uma série de drama médico que acompanha a vida profissional e pessoal de internos, residentes e assistentes cirúrgicos no fictício Seattle Grace Hospital (mais tarde Grey Sloan Memorial Hospital), focando no seu desenvolvimento como médicos e nos seus relacionamentos. A série explora decisões de vida ou morte, as dificuldades da carreira e como os médicos encontram apoio e, às vezes, amor uns nos outros. </p>
            </div>
          </div>
        </div>
      </div>
  
      
    </div>
  
    </div> 
  
  </div> 
  
  <!-- Footer -->
  <footer class="custom-footer d-flex flex-column align-items-center justify-content-center text-center py-3 mt-5 text-white">
    <div class="footer-logo mb-2">
      <img src="img/Logo_streaming(2).png" alt="Logo" />
    </div>
    <p class="mb-1"><strong>Entre em contato:</strong> contact@cinehome.com</p>
    <p class="mb-0 small">©️2025, Cinehome.com | Direitos Reservados</p>
  </footer>

    <!-- js do bootstrap -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>