<?php

//declarou uma variavel = atribuiu a ela uma lista
$categorias = [];
// populamos a lista com os valores
$categorias [] = 'infatil';
$categorias [] = 'adolescente';
$categorias [] = 'adulto';
$categorias [] = 'idoso';

//echoamos essa lista
//print_r($categorias);


$nome = 'Eduardo';
$idade= 18 ;

//var_dumpp ; mostra o tipo da variavel

//var_dump($nome);
//var_dump($idade);

if ($idade >=6 && $idade <= 12){
    echo "INFATIL";
}else if($idade >=13 && $idade < 18){
    echo "ADOLESCENTE";
}else{
    echo "ADULTO";
}