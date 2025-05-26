<?php
session_start();

// Limpa o cadastro se vier com reset
if (isset($_GET['reset']) && $_GET['reset'] == 1) {
  unset($_SESSION['usuario']);
  header("Location: cadastro.php");
  exit;
}

if (isset($_SESSION['usuario'])) {
  $nome = $_SESSION['usuario']['nome'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CineHome - Cadastro</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap&quot; rel="stylesheet');

    * {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      height: 100%;
      overflow: hidden;
    }

    .bg-container {
      position: relative;
      width: 100%;
      height: 100vh;
      background: url('../img/foto_filmes.png') no-repeat left center;
      background-size: cover;
    }

    .form-overlay {
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: 40%;
      display: flex;
      justify-content: center;
      align-items: center;
      background: rgba(0, 0, 0, 0.6);
    }

    .form-box {
      width: 100%;
      max-width: 360px;
      padding: 2rem;
      background-color: rgba(0, 0, 0, 0.7);
      border-radius: 12px;
      color: white;
      z-index: 2;
    }

    .common-input {
      background-color: #fff;
      color: #000 !important;
    }

    .common-input:focus {
      background-color: #ffffffdd;
      color: #000 !important;
      box-shadow: none;
    }

    .btn-danger {
      background-color: #D22424;
      border: none;
      padding: 0.75rem;
      font-weight: bold;
      letter-spacing: 1px;
      transition: background-color 0.2s ease;
    }

    .btn-danger:hover {
      background-color: #a71c1c;
    }

    .form-label {
      font-size: 1.2rem;
      font-weight: 500;
    }

    .text-link {
      text-align: center;
      margin-top: 1rem;
    }

    .text-link a {
      color: #ff4c4c;
      text-decoration: none;
    }

    .text-link a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .form-overlay {
        width: 100%;
        background-color: rgba(0, 0, 0, 0.85);
      }

      .bg-container {
        background-position: top center;
        background-size: contain;
      }
    }
  </style>
</head>
<body>

<div class="bg-container">
  <div class="form-overlay">
    <div class="form-box">
      <h1 class="mb-4 text-center" style="letter-spacing: 2px;">CADASTRO</h1>

      <?php
      if (isset($nome)) {
        echo "<div class='alert alert-info text-center'>
                Olá, <strong>$nome</strong>! Você já está cadastrado no CineHome.
              </div>
              <div class='text-center mt-3'>
                <a href='login.php' class='btn btn-danger w-100'>Ir para a página de login</a>
              </div>
              <div class='text-link'>
                <a href='cadastro.php?reset=1'>Voltar para o cadastro</a>
              </div>";
      } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $email = htmlspecialchars($_POST["email"]);
        $senha = htmlspecialchars($_POST["senha"]);

        $_SESSION['usuario'] = [
          'nome' => $nome,
          'email' => $email,
          'senha' => $senha,
        ];

        echo "<div class='alert alert-success text-center'>
                Cadastro realizado com sucesso! Bem-vindo, <strong>$nome</strong>.
              </div>
              <div class='text-center mt-3'>
                <a href='login.php' class='btn btn-danger w-100'>Ir para a página de login</a>
              </div>
              <div class='text-link'>
                <a href='cadastro.php?reset=1'>Voltar para o cadastro</a>
              </div>";
      } else {
      ?>

      <form method="POST" action="">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" name="nome" id="nome" class="form-control common-input" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" name="email" id="email" class="form-control common-input" required>
        </div>
        <div class="mb-4">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" name="senha" id="senha" class="form-control common-input" required>
        </div>
        <button type="submit" class="btn btn-danger w-100">CADASTRAR</button>
      </form>

      <div class="text-link">
        Já tem uma conta? <a href="login.php">Ir para login</a>
      </div>

      <?php } ?>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>