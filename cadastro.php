<?php
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    // Verificar se o nome de login já está em uso
    $verificarLogin = "SELECT * FROM login WHERE login = '$login'";
    $resultado = mysqli_query($conexao, $verificarLogin);

    if (mysqli_num_rows($resultado) > 0) {
        echo "O nome de login '$login' já está em uso. Por favor, escolha outro.";
    } else {
        $insert = "INSERT INTO login (nome, login, senha) VALUES ('$nome', '$login', '$senha')";
        if (mysqli_query($conexao, $insert)) {
            header('Location: index.php');
            exit();
        } else {
            echo "Erro ao cadastrar usuário: " . mysqli_error($conexao);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background: linear-gradient(to bottom, black, red);
      color: white;
      font-family: Arial, sans-serif;
    }

    center {
      margin-top: 150px;
    }

    h1 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    input[type="text"],
    input[type="password"] {
      padding: 10px;
      width: 250px;
      margin-bottom: 15px;
    }

    input[type="submit"] {
      padding: 10px 20px;
      background-color: #e62e00;
      color: white;
      border: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #cc2900;
    }
  </style>
  <title>Cadastro</title>
</head>

<body>
  <center>
    <h1>Cadastro</h1>
    <form id="cadastro" action="cadastro.php" method="POST">
      Nome: <input type="text" name="nome" required><br>
      Login: <input type="text" name="login" required><br>
      Senha: <input type="password" name="senha" required><br><br>
      <input type="submit" value="Cadastrar">
    </form>
  </center>
</body>

</html>
