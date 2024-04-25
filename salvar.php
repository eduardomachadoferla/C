<?php

//capturandi as variaveis 

$nome = $_POST['nome'];

$email = $_POST['email'];

$senha = $_POST['senha'];


if(!$nome || !$email || !$senha ){
    echo 'preencha todos os campos';
}else{
    if(!file_exists($nome.'.txt')){
        $cria = fopen ($nome.'.txt', 'w+');

        $dados = "$nome|";
        $dados .= "$email|";
        $dados .= "$senha|";
      

        $escreve = fwrite($cria, $dados);
        fclose($cria);
        echo ' usuario cadastrado com sucess';
    }else{
        echo"usuario chadado $nome ja foi cadastrado";
    }
}
