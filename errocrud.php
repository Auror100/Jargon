<?php


function maybe($word)
{
    connect();

    $r = query("SELECT word FROM  Words WHERE word LIKE '%$word%'");
    return $r;

    close();
}



?>