<?php
session_start();
?>

<html>
<head>
  <style>
    body {
      background: linear-gradient(to bottom, black, red);
      color: white;
      font-family: Arial, sans-serif;
    }

    center {
      margin-top: 150px;
    }

    a {
      color: white;
      text-decoration: none;
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <center>
    <?php if (isset($_SESSION['nome'])) {
      echo "Olá, " . $_SESSION['nome'] . "<br><br>";
      if ($_SESSION['nome'] === 'administrador') {
        ?>
        <a href="cadastro.php">Cadastrar Usuário</a><br>
        <a href="listar.php">Listar Usuários</a><br><br>
        <?php
      }
      ?>
      <a href="alterarsenha.php">Alterar Senha</a><br>
      <a href="logout.php">Sair</a><br>
      <?php
    } else {
      ?>
      Olá, visitante. <a href="login.php">Login</a>
      <?php
    }
    ?>
  </center>
</body>

</html>
