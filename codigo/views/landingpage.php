<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Importando Bootstrap e estilos personalizados -->
     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
     <!-- Fav Icon -->
     <link rel="shortcut icon" href="img/Logo-Streaming-Filmes-_1_.ico" type="image/x-icon">
    <!-- css interno -->
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

    .bem{
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
        background-color: #00000020 !important;
        border: 3px solid #fff ;
        border-radius: 5px;
    }
    .borderless{
        border: none;
    }

    .carrossel-posters {
        max-width: 300px;
        margin: 0 auto;
    }
    
    .poster-img {
        height: 400px;
        width: auto;
        object-fit: cover;
        border-radius: 8px;
    }
    

    /* botões */
    .common-btn{
        background-color: #00000020;
        color: #fff;
        border: 3px solid #fff;
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

    /* inputs */
    .common-input{
        background-color: #ffffff88;
        border: none;
        border-left: 4px solid #fff;
        border-bottom: 4px solid #fff;
        color: #fff;
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

    /* faz os posters de filmes e series ficar do tamanho correto */
    .fmsr-poster{
        height: auto;
        width: 100%;
        max-width: 150px;
        max-height: 230px;
        border-radius: 5px;
        object-fit: cover;
    }
    .mini-poster{
        max-height: 75px;
        max-width: 150px;
        border: 1px solid #fff;
        border-radius: 5px;
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
    .nav-color{
        background-color: #000000;
    }
    .nav-logo img{
        width: 60px;
        height: 60px;
    }
    .cover{
        background: linear-gradient(90deg, #000000 0%, #00000000 50%), url(../img/foto_filmes.png) no-repeat;
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
    footer{
        background-color: #585858;
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
        .fmsr-poster {
        width: 100%;
        max-width: 200px;
        height: auto;
        border-radius: 5px;
        }
        .borderless-sm{
            border: none;
        }
        .log-container {
        width: 100%;
        max-width: 400px;
        height: auto;
        padding: 2em;
        margin: auto;
        }

    }
    </style>
    <title>CineHome</title>
</head>
<body>
    <!-- main -->
    <main class="container-fluid cover p-md-5 pe-1 px-1">
        <div class="container mt-md-3 ms-md-5 p-4 pe-lg-1 col-md-5 col-sm-12 common-container borderless-sm">
            <h1 class="title-font">CineHome</h1>
            <p style="font-size: 1.6em;" class="mb-5 lh-lg">O lugar onde você<br>transforma sua casa em cinema!</p>
            <a href="login.php" class="btn btn-danger btn-sm">Entrar</a>
        </div>
    </main>
    <div class="container-fluid">
        <h3 class="title-font m-2">Um catálogo que abrange todos os gostos!</h3>
        
        <!-- negócios de filme série  -->
        <div class="container-fluid">
            <p class="mb-4 mt-5 fs-3 text-uppercase text-center">Filmes</p>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3 px-3">
                <div class="col">
                    <img src="../img/bonequinhadeluxo.jpg" alt="filme" class="fmsr-poster img-fluid mx-auto d-block">
                </div>
                <div class="col">
                    <img src="../img/charliechaplin.jpg" alt="filme" class="fmsr-poster img-fluid mx-auto d-block">
                </div>
                <div class="col">
                    <img src="../img/oppenheimer2.jpg" alt="filme" class="fmsr-poster img-fluid mx-auto d-block">
                </div>
                <div class="col">
                    <img src="../img/vingadores.jpg" alt="filme" class="fmsr-poster img-fluid mx-auto d-block">
                </div>
            </div>
            <p class="mb-4 mt-5 fs-3 text-uppercase text-center">Séries</p>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3 px-3">
                <div class="col">
                    <img src="../img/greysanatomy.jpg" alt="filme" class="fmsr-poster img-fluid mx-auto d-block">
                </div>
                <div class="col">
                    <img src="../img/brooklyn99.jpg" alt="filme" class="fmsr-poster img-fluid mx-auto d-block">
                </div>
                <div class="col">
                    <img src="../img/cobrakai.jpg" alt="filme" class="fmsr-poster img-fluid mx-auto d-block">
                </div>
                <div class="col">
                    <img src="../img/todomundoodeiaochris.jpg" alt="filme" class="fmsr-poster img-fluid mx-auto d-block">
                </div>
            </div>
            <p class="mb-4 mt-5 fs-3 text-uppercase text-center">Novelas</p>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3 px-3">
                <div class="col">
                    <img src="../img/avenidabrasil.jpg" alt="filme" class="fmsr-poster img-fluid mx-auto d-block">
                </div>
                <div class="col">
                    <img src="../img/cheiasdecharme.jpg" alt="filme" class="fmsr-poster img-fluid mx-auto d-block">
                </div>
                <div class="col">
                    <img src="../img/chiquititas.jpg" alt="filme" class="fmsr-poster img-fluid mx-auto d-block">
                </div>
                <div class="col">
                    <img src="../img/rebelde.jpg" alt="filme" class="fmsr-poster img-fluid mx-auto d-block">
                </div>
            </div>
            <p class="mb-4 mt-5 fs-3 text-uppercase text-center">Desenhos</p>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3 px-3">
                <div class="col">
                    <img src="../img/picapau.jpg" alt="filme" class="fmsr-poster img-fluid mx-auto d-block">
                </div>
                <div class="col">
                    <img src="../public/img_catalogo/ben_10.jpg" alt="filme" class="fmsr-poster img-fluid mx-auto d-block">
                </div>
                <div class="col">
                    <img src="../img/backardigans.jpg" alt="filme" class="fmsr-poster img-fluid mx-auto d-block">
                </div>
                <div class="col">
                    <img src="../public/img_catalogo/futurama.jpg" alt="filme" class="fmsr-poster img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- Rodapé -->
    <footer class="d-flex flex-column align-items-center justify-content-center mt-5">
        <div class="nav-logo"><img src="../img/Logo_streaming(2).png" alt="Logo"></div>
        <p class="lh-1"><strong>Entre em contato:</strong> contact@cinehome.com </p>
        <p class="lh-1" style="font-size: small;">©️2025, Cinehome.com | Direitos Reservados</p>
    </footer>

    <!-- js do bootstrap -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>