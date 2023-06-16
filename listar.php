<?php
include("conexao.php");

// Consulta para recuperar os nomes dos usuários cadastrados
$query = "SELECT nome FROM login";
$resultado = mysqli_query($conexao, $query);

if ($resultado) {
    // Exibe os nomes dos usuários cadastrados
    echo "<html>
            <head>
                <style>
                    body {
                        background: linear-gradient(to bottom, black, red);
                        font-family: Arial, sans-serif;
                        margin: 0;
                        padding: 0;
                    }
                    .container {
                        max-width: 800px;
                        margin: 0 auto;
                        padding: 20px;
                    }
                    h1 {
                        background: linear-gradient(to right, #e60000, #9b0000);
                        color: white;
                        padding: 20px;
                        text-align: center;
                        margin: 0;
                    }
                    ul {
                        list-style-type: none;
                        padding: 0;
                        margin: 0;
                    }
                    li {
                        background-color: white;
                        padding: 10px;
                        margin-bottom: 10px;
                        border-radius: 5px;
                    }
                </style>
            </head>
            <body>
                <div class=\"container\">
                    <h1>Lista de Usuários Cadastrados</h1>
                    <ul>";
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<li>" . $row['nome'] . "</li>";
    }
    echo "      </ul>
                </div>
            </body>
          </html>";
} else {
    echo "Erro ao recuperar os usuários cadastrados.";
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>
