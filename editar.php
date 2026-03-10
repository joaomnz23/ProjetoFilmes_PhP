<?php
    // IMPORTA CONEXÃO
    require_once("conexaoBD.php");

    // ALTERAÇÃO NO BANCO DE DADOS
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        if( (isset($_POST['tituloFilme'])) && (isset($_POST['anoFilme'])) && (isset($_POST['generoFilme'])) && (isset($_POST['sinopseFilme'])) ){

            $tituloFilme = $_POST['tituloFilme'];
            $anoFilme = $_POST['anoFilme'];
            $generoFilme = $_POST['generoFilme'];
            $sinopseFilme = $_POST['sinopseFilme'];

            $idFilme = $_GET['filmes'];
          
            $sql = "UPDATE filmes SET titulo = '$tituloFilme', ano_lancamento = '$anoFilme', genero = '$generoFilme', sinopse = '$sinopseFilme'
                    WHERE idFilme = $idFilme";

            $resultado = mysqli_query($conexao, $sql);

            if($resultado){
                echo "Inserção válida!";
                header("Location: index.php");
            } else {
                echo "Ocorreu um problema na inserção...";
                echo mysqli_error($conexao);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Alteração do filme</title>
</head>
<body>

    <div class="cadastro">
        <h2>Alteração do filme:</h2>

        <?php
            // ========== REALIZA A CONSULTA ==========
            $idFilme = $_GET['filmes'];

            $sql = "SELECT * FROM filmes WHERE idFilme = $idFilme";
            $resultado = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($resultado) > 0) {

                // ========== COLETANDO DADOS DA CONSULTA ==========
                $linha =  mysqli_fetch_assoc($resultado);
                echo "<h3 class='nomeFilme'>".$linha['titulo']."</h3>";
            } else {
                header("Location: index.php");
            }
        ?>

        <form action="editar.php?filmes=<?=$idFilme?>" method="post">

            <label>Título do filme:</label> <br>
            <input type="text" placeholder="Digite o título do filme" name="tituloFilme" class="campos" required
            value="<?= $linha['titulo']?>">

            <br><br>

            <label>Ano de lançamento:</label> <br>
            <input type="number" placeholder="YYYY" min="1400" max="2500" name="anoFilme" class="campos" required
            value="<?= $linha['ano_lancamento']?>">

            <br><br>

            <label>Gênero do filme:</label> <br>
            <input type="text" placeholder="Digite o gênero do filme" name="generoFilme" class="campos" required
            value="<?= $linha['genero']?>">

            <br><br>

            <label>Sinopse do filme:</label> <br>
            <textarea name="sinopseFilme" rows="5" cols="20" class="campos"><?= $linha['sinopse']?></textarea>

            <br><br>

            <input type="submit" value="Alterar" class="botao">

        </form>
    </div>

</body>
</html>