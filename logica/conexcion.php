<?php

$host = "localhost";
$usuario = "root";
$password = "";
$bd = "biblioteca";

$conexcion = mysqli_connect($host,$usuario,$password,$bd);

if($conexcion){
    echo "conectado correctamente";
}else{
    echo "no se pudo conectar";
}

?>