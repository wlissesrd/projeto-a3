<?php
session_start();

// Verifique se o usuário está autenticado
if (!isset($_SESSION['nome'])) {
    header("Location: login.php"); // Redireciona para a página de login se não estiver autenticado
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Realize a conexão com o banco de dados
    $conexao = mysqli_connect('localhost', 'root', '', 'projetoa3','3306');

    // Verifique se a conexão foi estabelecida corretamente
    if (!$conexao) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Recupere os dados do formulário
    $novasenha = $_POST['nova_senha'];
    $confirmarsenha = $_POST['confirmar_senha'];

    // Verifique se a nova senha e a confirmação correspondem
    if ($novasenha !== $confirmarsenha) {
        die("A nova senha e a confirmação da senha não correspondem.");
    }

    // Execute a lógica para atualizar a senha no banco de dados
    $nomeUsuario = $_SESSION['nome']; // Assumindo que o campo 'nome' é usado como identificador único na tabela de usuários
    $senhaHash = $novasenha;

    $sql = "UPDATE login SET senha = '$senhaHash' WHERE nome = '$nomeUsuario'";
    if (mysqli_query($conexao, $sql)) {
        echo "Senha atualizada com sucesso!";
        echo '<br><br>';
        echo '<a href="login.php">Voltar para a página de login</a>'; // Botão para voltar para a página de login
    } else {
        echo "Erro ao atualizar a senha: " . mysqli_error($conexao);
    }

    // Feche a conexão com o banco de dados
    mysqli_close($conexao);
}
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

    h1 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    label {
      margin-bottom: 10px;
    }

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

    a {
      color: white;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <center>
    <!-- Exiba o formulário de alteração de senha -->
    <h1>Alterar Senha</h1>
    <form method="POST" action="alterarsenha.php">
      <label for="nova_senha">Nova senha:</label>
      <input type="password" name="nova_senha" id="nova_senha" required>

      <label for="confirmar_senha">Confirmar nova senha:</label>
      <input type="password" name="confirmar_senha" id="confirmar_senha" required>

      <input type="submit" value="Alterar Senha">
    </form>
  </center>
</body>

</html>
