<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de filmes</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Captura os dados
        $tituloFilme = $_POST['tituloFilme'];
        $anoFilme = $_POST['anoFilme'];
        $generoFilme = $_POST['generoFilme'];
        $sinopseFilme = $_POST['sinopseFilme'];

        // VERIFICANDO CAMPOS EM BRANCO
        if(empty($tituloFilme)){
            echo "Campo TÍTULO em branco, por favor, preencha";
        }
        if(empty($anoFilme)){
            echo "Campo ANO DO FILME em branco, por favor, preencha";
        }
        if(empty($generoFilme)){
            echo "Campo GÊNERO em branco, por favor, preencha";
        }
        
        // VALIDANDO NOME DO FILME
        if(!empty($tituloFilme)){
            if(filter_input(INPUT_POST, 'tituloFilme', FILTER_SANITIZE_STRING)){
                $nomeFilme_VAL = filter_input(INPUT_POST, 'tituloFilme', FILTER_SANITIZE_STRING);
            } else {
                echo "Título do filme não foi validado, verifique o formato e tente novamente";
            }
        }

        // VALIDANDO O ANO DO FILME
        if(!empty($anoFilme)){
            if(filter_input(INPUT_POST, 'anoFilme', FILTER_SANITIZE_NUMBER_INT))
            {
                if(filter_input(INPUT_POST, 'anoFilme', FILTER_VALIDATE_INT))
                {
                    if(strlen($anoFilme) == 4)
                    {
                        $anoFilme_VAL = $anoFilme;
                    } else {
                        echo "Ano deve ter 4 dígitos";
                    }
                } else {
                    echo "Ano deve ser um número inteiro";
                }
            } else {
                echo "Ano do livro não foi validado, verifique o formato e tente novamente";
            }
        }

        // VALIDANDO GENERO DO FILME
        if(!empty($generoFilme)){
            if(filter_input(INPUT_POST, 'generoFilme', FILTER_SANITIZE_STRING)){
                $generoFilme_VAL = filter_input(INPUT_POST, 'generoFilme', FILTER_SANITIZE_STRING);
            } else {
                echo "Gênero do filme não foi validado, verifique o formato e tente novamente";
            }
        }

        // VALIDANDO GENERO DO FILME
        if(!empty($sinopseFilme)){
            if(filter_input(INPUT_POST, 'sinopseFilme', FILTER_SANITIZE_STRING)){
                $sinopseFilme_VAL = filter_input(INPUT_POST, 'sinopseFilme', FILTER_SANITIZE_STRING);
            } else {
                echo "Sinopse do filme não foi validada, verifique o formato e tente novamente";
            }
        }
        
        

        // ========== INSERÇÃO DADOS ========== 
        if (isset($nomeFilme_VAL) && isset($anoFilme_VAL) && isset($generoFilme_VAL) && isset($sinopseFilme_VAL)) {

            require_once("conexaoBD.php");
            
            $sql = "INSERT INTO filmes(titulo, ano_lancamento, genero, sinopse)
                    VALUES ('$nomeFilme_VAL', '$anoFilme_VAL', '$generoFilme_VAL', '$sinopseFilme_VAL')";
            $resultado = mysqli_query($conexao, $sql);

            if($resultado){
                echo "Inserção válida!";
                header("Location: index.php");
            } else {
                echo "Ocorreu um problema na inserção...";
            }
        }

        } else {
            header("Location: index.php");
        }

        // MENSAGEM CONCLUSÃO
        if((isset($nomeFilme_VAL)) && (isset($anoFilme_VAL)) && (isset($generoFilme_VAL)) && (isset($sinopseFilme_VAL))){
            echo "Cadastro concluído <br><br>";
            echo "<h3>Conferencia: </h3>";
            echo "Nome Livro: " . $nomeLivro_VAL . "<br>";
            echo "Ano Livro: " . $anoLivro_VAL . "<br>";
            echo "ID Autor: " . $IDAutor_VAL . "<br>";
            echo "ID Editora: " . $IDEditora_VAL . "<br>";
    }
?>
</body>
</html>