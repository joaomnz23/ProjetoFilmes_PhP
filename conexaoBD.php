<?php
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'b24_40498596_filmes';
    

    // CONECTAR AOS BANCO DE DADOS
    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    // VERIFICAR SE A CONEXÃO FOI BEM-SUCEDIDA
    if (!$conexao) {
        die('Erro na conexão: ' . mysqli_connect_error());
    }
    
    //echo "CONEXÃO BEM-SUCEDIDA! <br><br>";

    // ===== DEFININDO TIPO DE CARACTER DA CONEXAO =====
    mysqli_set_charset($conexao, 'utf8');
?>