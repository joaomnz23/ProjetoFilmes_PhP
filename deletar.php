<?php

    if(isset($_GET['filmes'])){
        require_once("conexaoBD.php");

        $idFilme = $_GET['filmes'];

        $sql = "DELETE FROM filmes WHERE idFilme = $idFilme";
        $resultado = mysqli_query($conexao, $sql);

        if($resultado){
            echo "Inserção válida!";
            header("Location: index.php");
        } else {
            echo "Ocorreu um problema na inserção...";
            echo mysqli_error($conexao);
        }

    } else {
        header("Location: index.php");
    }

?>