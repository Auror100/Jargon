<?php
$connection;
$root='root';
$password= '';
$base ='pt';
//Cria as variáveis

function connect(){
    global $connection,$root,$password,$base;

    $connection= mysqli_connect('localhost:3306',$root,$password,$base) or die(mysqli_connect_error());

}

function query($sql){
    
    global $connection;
    mysqli_query($connection,"SET CHARACTER  SET utf8");
    $query= mysqli_query($connection,$sql) or die(mysqli_connect_error());
    return $query;
}


function close(){
    global $connection;
    mysqli_close($connection);
}
