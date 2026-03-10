<?php
    require_once("conexaoBD.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht, inital-scale=1.0">
    <title>Cadastro de Filmes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="cinema.ico">
</head>
<body> 
    <a href="../index.php" class="botao-link">Voltar para a página de navegação</a> <br><br><br>

    <div class="container">
        <div>
            <div class="consulta">
            <h1>Filmes cadastrados</h1>
            <table>
                <tr class="cabecalho">
                    <th class="col-titulo">Título</th>            
                    <th>Ano de Lançamento</th>
                    <th>Gênero</th>
                    <th class="col-sinopse">Sinopse</th>
                    <th>Alterar</th>
                    <th>Deletar</th>
                </tr>
            
            <?php
                // ========== REALIZA A CONSULTA ==========
                $sql = "SELECT * FROM filmes";
                $resultado = mysqli_query($conexao, $sql);

                if(mysqli_num_rows($resultado) > 0) {

                    // ========== PERCORRENDO TODOS OS RESULTADOS DA CONSULTA ==========
                    while($linha =  mysqli_fetch_assoc($resultado)){
                        echo "<tr>";
                        echo "<td>" . $linha['titulo'] . "</td>";
                        echo "<td>" . $linha['ano_lancamento'] . "</td>";
                        echo "<td>" . $linha['genero'] . "</td>";
                        echo "<td class='col-sinopse'>" . $linha['sinopse'] . "</td>";

                        $idFilme = $linha['idFilme'];
                        echo "<td> <a href='editar.php?filmes=$idFilme'> 
                        <img src='alterar.png' alt='Editar' class='icones-tabela'> 
                        </a> </td>";
                        echo "<td> <a href='deletar.php?filmes=$idFilme'> 
                        <img src='https://images.icon-icons.com/259/PNG/128/ic_delete_128_28267.png' alt='Deletar' class='icones-tabela'> 
                        </a> </td>";
                        echo "</tr>";                
                    }

                } else {
                    echo "<h3 class='nomeFilme'>DADOS NÃO ENCONTRADOS</h3>";
                }
            ?>
            </table>
            </div>
        </div>    

        <div>
            <div class="interface">
                <form action="cadastroFilmes.php" method="post">
                    <h2>Cadastro de Filmes</h2>

                    <label>Título do filme:</label> <br>
                    <input type="text" placeholder="Digite o título do filme" name="tituloFilme" class="campos" required>

                    <br><br>

                    <label>Ano de lançamento:</label> <br>
                    <input type="number" placeholder="YYYY" min="1400" max="2500" name="anoFilme" class="campos" required>

                    <br><br>

                    <label>Gênero do filme:</label> <br>
                    <input type="text" placeholder="Digite o gênero do filme" name="generoFilme" class="campos" required>

                    <br><br>

                    <label>Sinopse do filme:</label> <br>
                    <textarea name="sinopseFilme" rows="5" cols="20" class="campos"></textarea>

                    <br><br>

                    <input type="submit" value="Enviar" class="botao">    
                </form>
            </div>
        </div>
    </div>

</body>
</html>