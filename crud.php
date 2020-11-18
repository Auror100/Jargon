<?php
include 'conexao.php';

$w = $_POST["word"];
$ww = strtolower($w);
$wf = preg_replace('/[ -]+/', '-', $ww);

function search($word)
{
    connect();

    $r = query("SELECT word FROM  Words WHERE word='$word'");
    return $r;

    close();
}



$test = search($ww);
/*
 Uma maneira simples de validar se 
 existe uma página para palavra.

 Contudo é necessário que jamais se ponha no banco
 uma palavra que não possui página ainda

 O ciclo deve ser:
    
    *Criar a página para a palavra.
    *Colocar a palavra nova no banco.


*/
if (mysqli_num_rows($test) > 0) {
    $link = "artigos/$wf.php";

    header("Location:$link");
} else {

    header("Location:erro.php?pesquisa=$ww");
}

//pesquisa=$ww