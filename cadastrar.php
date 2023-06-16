<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <style>
    body {
      background: linear-gradient(to bottom, black, red);
      color: white;
      font-family: Arial, sans-serif;
    }

    center {
      margin-top: 150px;
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
</head>

<body>
  <center>
    <form id="cadastro" action="cadastro.php" method="POST">
      Nome: <input type="text" name="nome" required><br>
      Login: <input type="text" name="login" required><br>
      Senha: <input type="password" name="senha" required><br><br>
      <input type="submit" id="cadastrar" value="Cadastrar">
    </form>
  </center>
</body>

</html>
