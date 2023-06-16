<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background: linear-gradient(to bottom, black, red);
    }

    form {
      margin-top: 150px;
      display: flex;
      flex-direction: column;
      align-items: center;
      font-family: Arial, sans-serif;
      color: white;
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
  <title>Document</title>
</head>

<body>
  <form id="login" action="logado.php" method="POST">
    <h1>LOGIN</h1>
    <label for="login">Login:</label>
    <input type="text" name="login" required><br>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" required><br><br>
    <input type="submit" value="Entrar">
  </form>
</body>

</html>
